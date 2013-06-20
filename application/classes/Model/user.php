<?

/*
* Model that represents a farmer in WeFarm
*
*/
class Model_User extends Model_Auth_User {

	 protected $_has_many = array(
	    'user_tokens' => array('model' => 'user_token'),
	    'roles'       => array('model' => 'role', 'through' => 'roles_users'),
	);

?>