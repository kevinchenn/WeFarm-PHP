<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base {

	public function action_index()
	{
		if (Auth::instance()->logged_in()){
			$user = Auth::instance()->get_user();
			$farmer = ORM::factory('farmer')->where('email', '=', $user->email)->find();
			$this->template->content = View::factory('user/account');
			if (!($farmer->hasAccessToken())){
				$this->template->content->wepay = "<b>Please create an account to manage your money: <a class='btn btn-primary' href=".url::base()."/wepayapi>Click here to create your account</a>";
			}
			else{
				$this->template->content->wepay = '';
			}
			$this->template->content->name = $farmer->name;
			$this->template->content->email = $farmer->email;
			$this->template->content->farm = $farmer->farm;
			$this->template->content->produce = $farmer->produce;
			$this->template->content->price = number_format($farmer->produce_price,2);
			$this->template->content->edit = true;
		}
		else{
			$this->template->content = View::factory('welcome/index');
		}
	}

	public function action_account(){
		$id = Request::current()->param('id');
		if (!isset($id)){
			HTTP::redirect('/');
		}
		$farmer = ORM::factory('farmer')->where('id', '=', $id)->find();
		$this->template->content = View::factory('user/account');
		if (Auth::instance()->logged_in()){
			$user = Auth::instance()->get_user();
			if ($farmer->email == $user->email){
				$this->template->content->edit = true;
			}
			else{
				$this->template->content->edit = false;
			}
			if (!($farmer->hasAccessToken())){
				$this->template->content->wepay = "<b>Please create an account to manage your money: <a class='btn btn-primary' href=".url::base()."/wepayapi>Click here to create your account</a>";
			}
			else if (!($this->template->content->edit) && $farmer->hasAccountId()){
				$this->template->content->wepay = "<a href=".url::base()."/user/buy/".$id." class='btn btn-danger btn-large' id='buy-now-button'>Buy ".$farmer->produce." Now!</a>";
			}
			else{
				$this->template->content->wepay = '';
			}
		}
		else{
			$this->template->content->wepay = '';
			if ($farmer->hasAccountId()){
				$this->template->content->wepay = "<a href=".url::base()."/user/buy/".$id." class='btn btn-danger btn-large' id='buy-now-button'>Buy ".$farmer->produce." Now!</a>";
			}
			$this->template->content->edit = false;
		}
		$this->template->content->name = $farmer->name;
		$this->template->content->email = $farmer->email;
		$this->template->content->farm = $farmer->farm;
		$this->template->content->produce = $farmer->produce;
		$this->template->content->price = number_format($farmer->produce_price,2);
	}

	public function action_buy(){
		$id = Request::current()->param('id');
		if (!isset($id)){
			HTTP::redirect('/');
		}
		$farmer = ORM::factory('farmer')->where('id', '=', $id)->find();
		$checkout_uri = Controller_WepayAPI::create_checkout($farmer);
		$this->template->content = View::factory('user/buy');
		$this->template->content->checkout_uri = $checkout_uri;
		$this->template->content->return_uri = url::base().'/user/account/'.$id;
		$this->template->content->name = $farmer->name;
		$this->template->content->email = $farmer->email;
		$this->template->content->farm = $farmer->farm;
		$this->template->content->produce = $farmer->produce;
		$this->template->content->price = number_format($farmer->produce_price,2);
	}

	public function action_register(){
		$this->template->content = View::factory('user/register');
	}

	public function action_complete_registration(){
		try{
			$post = Validation::factory($_POST)
            ->rule('name', 'not_empty')
            ->rule('password', 'not_empty')
            ->rule('password', 'min_length', array('6'))
            ->rule('email', 'not_empty')
            ->rule('email', 'email')
            ->rule('price', 'numeric')
            ->rule('price', 'not_empty')
            ->rule('farm', 'not_empty')
            ->rule('produce', 'not_empty');
		} catch (Validation_Exception $e) {
			$this->template->content = "Your registration was not valid: ".$e->errors();
		}
		
		$user = ORM::factory('user');
		$farmer = ORM::factory('farmer');

		$user->username = $_POST['name'];
		$user->email = $_POST['email'];
		$user->password = $_POST['password'];
		
		$farmer->name = $_POST['name'];
		$farmer->email = $_POST['email'];
		$farmer->farm = $_POST['farm'];
		$farmer->produce = $_POST['produce'];
		$farmer->produce_price = $_POST['price'];

		$user->save();
		$user->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
		$farmer->save();

		$success = Auth::instance()->login($_POST['email'], $_POST['password']);

		if ($success){
			HTTP::redirect('user');
		}
		else{
			$this->template->content = "There was an error";
		}
	}

	public function action_login(){
		$this->template->content = View::factory('user/login');
	}

	public function action_complete_login(){
		try{
			$post = Validation::factory($_POST)
				->rule('email', 'not_empty')
				->rule('email', 'email')
	            ->rule('password', 'not_empty')
	            ->rule('password', 'min_length', array('6'));
		} catch (Validation_Exception $e) {
			$this->template->content = "Your login was not valid: ".$e->errors();
		}

		$success = Auth::instance()->login($_POST['email'], $_POST['password']);

		if ($success){
			HTTP::redirect('user');
		} else{
			$this->template->content = "There was an error, try again";
		}
			
	}

	public function action_logout(){
		#Sign out the user
		Auth::instance()->logout();
 
		#redirect to the user account and then the signin page if logout worked as expected
		HTTP::redirect('/');	

	}

	public function action_edit(){
		if (Auth::instance()->logged_in()){
			$user = Auth::instance()->get_user();
			$farmer = ORM::factory('farmer')->where('email', '=', $user->email)->find();
			$this->template->content = View::factory('user/edit');
			$this->template->content->name = $farmer->name;
			$this->template->content->email = $farmer->email;
			$this->template->content->farm = $farmer->farm;
			$this->template->content->produce = $farmer->produce;
			$this->template->content->price = $farmer->produce_price;
		}
		else{
			$this->template->content = "Error, you're not logged in!";
		}

	}

	public function action_update(){
		try{
			$post = Validation::factory($_POST)
            ->rule('name', 'not_empty')
            ->rule('email', 'not_empty')
            ->rule('email', 'email')
            ->rule('price', 'numeric')
            ->rule('price', 'not_empty')
            ->rule('farm', 'not_empty')
            ->rule('produce', 'not_empty');
		} catch (Validation_Exception $e) {
			$this->template->content = "Your registration was not valid: ".$e->errors();
		}

		if (Auth::instance()->logged_in()){
			$user = Auth::instance()->get_user();
			$farmer = ORM::factory('farmer')->where('email', '=', $user->email)->find();
			$farmer->produce = $_POST['produce'];
			$farmer->farm = $_POST['farm'];
			$farmer->produce_price = $_POST['price'];
			$farmer->save();

			HTTP::redirect('user');
		}
		else{
			$this->template->content = "You can't update information for this user!";
		}	

	}
} 
