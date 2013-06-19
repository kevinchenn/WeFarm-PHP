<?

	/*
	* Model that represents a farmer in WeFarm
	*
	*/
	class Model_Farmer extends ORM {

		public function saveAccessToken($access_token){
			$this->wepay_access_token = $access_token;
			$this->save();
		}

		public function saveAccountId($account_id){
			$this->wepay_account_id = $account_id;
			$this->save();
		}

		public function getAccessToken(){
			if (isset($this->wepay_access_token)){
				return $this->wepay_access_token;
			}
		}

		public function getAccountId(){
			if (isset($this->wepay_account_id)){
				return $this->wepay_account_id;
			}
		}

		public function hasAccessToken(){
			if (isset($this->wepay_access_token)){
				return true;
			}
			return false;
		}

		public function hasAccountId(){
			if (isset($this->wepay_account_id)){
				return true;
			}
			return false;
		}


	}


?>