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

	 /**
     * Allows a model use both email and username as unique identifiers for login
     *
     * @param   string  unique value
     * @return  string  field name
     */
    public function unique_key($value)
    {
        return Valid::email($value) ? 'email' : 'username';
    }


}


?>