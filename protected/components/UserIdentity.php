<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_user;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$this->_user = User::model()->findByAttributes(array('username'=>$this->username));
		Yii::trace(CVarDumper::dumpAsString($this->_user->validatePassword($this->password)), 'WtfyDebug');
		if(!isset($this->_user))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(!$this->_user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->errorCode=self::ERROR_NONE;
			$this->_id = $this->_user->id;
			$this->setState('name', empty($this->_user->username) ? $this->_user->email : $this->_user->username);
		}
		return !$this->errorCode;
	}

	public function getId()
	{
	    return $this->_id;
	}

}
