<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Base {

	public function action_index()
	{
		$this->template->content = View::factory('welcome/index');
		$total = count(ORM::factory('farmer')->find_all());
		$count = 0;
		$table = array();
		$id = 1;
		while ($count < $total){
			$farmer = ORM::factory('farmer')->where('id', '=', $id)->find();
			if (isset($farmer->name)){
				array_push($table, $farmer);
				$count++;
			}
			$id++;
		}
		$this->template->table = $table;
	}


}

?>