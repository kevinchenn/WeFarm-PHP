<?php defined('SYSPATH') or die('No direct script access.');

class Controller_WepayAPI extends Controller_Base {
	
	public function action_index() {

		if (Auth::instance()->logged_in()){
			WePay::useStaging('194212', '9db90ec777');
			//
			//$account_id = '1787791012';

			$redirect_uri = 'http://localhost/wefarm_php/wepayapi';
			$scope = WePay::$all_scopes;
			
			if (empty($_GET['code'])) {
				$uri = WePay::getAuthorizationUri($scope, $redirect_uri);
				HTTP::redirect($uri);
			}
			else {
				$info = WePay::getToken($_GET['code'], $redirect_uri);
				if ($info) {
					// Normally you'd integrate this into your existing auth system
					$_SESSION['wepay_access_token'] = $info->access_token;
					$this->saveAccessToken($info->access_token);
					$this->createAccount();
					// If desired, you can also store $info->user_id somewhere
					$this->template->content = "WePay Account Created! You can now purchase goods!";
				}
				else {
					// Unable to obtain access token
					echo 'Unable to obtain access token from WePay.';
				}
			}
		}
		else{
			$this->template->content = "Not Logged In";
		}

	}

	public function saveAccessToken($access_token) {
		$user = Auth::instance()->get_user();
		$farmer = ORM::factory('farmer')->where('email', '=', $user->email)->find();
		$farmer->saveAccessToken($access_token);
	}

	public function createAccount() {
		$user = Auth::instance()->get_user();
		$farmer = ORM::factory('farmer')->where('email', '=', $user->email)->find();
		$wepay = new WePay($farmer->getAccessToken());
		$response = $wepay->request('account/create/', array(
        		'name'          => $farmer->name,
        		'description'   => $farmer->name."'s WeFarm account"
    	));
		$farmer->saveAccountId($response->account_id);
	}

	public static function create_checkout($merchant){
		WePay::useStaging('194212', '9db90ec777');
		//$user = Auth::instance()->get_user();
		//$farmer = ORM::factory('farmer')->where('email', '=', $user->email)->find();
		$wepay = new WePay($merchant->getAccessToken());
		$response = $wepay->request('checkout/create/', array(
        		'account_id'          => $merchant->getAccountId(),
        		'short_description'   => "Purchasing ".$merchant->produce." from ".$merchant->name.".",
        		'type' 				  => 'goods',
        		'amount'			  => $merchant->produce_price,
        		'mode'				  => 'iframe'
    	));
		return $response->checkout_uri;
	}

}

?>