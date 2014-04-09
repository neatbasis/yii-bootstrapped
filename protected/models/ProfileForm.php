<?php

/**
 * ProfileForm class.
 * ProfileForm is the data structure for keeping
 * user profile form data. It is used by the 'profile' action of 'SiteController'.
 */
class ProfileForm extends CFormModel
{
	public $username;
	public $password;
	public $firstname;
	public $lastname;
	public $role;
	public $password_repeat;
	public $email;
	public $rememberMe;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, email', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			//array('password', 'authenticate'),
			array('role,password,password_repeat,firstname,lastname', 'safe'),
			array('password', 'compare', 'compareAttribute'=>'password_repeat','on'=>'update'),
			array('password_repeat', 'compare', 'compareAttribute'=>'password','on'=>'update'),
				
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username'=>Yii::t('login','Username'),
			'password'=>Yii::t('login','Password'),
			'password_repeat'=>Yii::t('login','Verify password'),
			'firstname'=>Yii::t('login','First name'),
			'lastname'=>Yii::t('login','Last name'),
			'role'=>Yii::t('login','User role'),
			'email'=>Yii::t('login','Email'),
		);
	}

	public function populate($user){
		$this->username = $user->username;
		$this->email = $user->email;
		$this->firstname = $user->firstname;
		$this->lastname = $user->lastname;
		$this->role = $user->role;

	}
	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function update($user=NULL)
	{
		if(!isset($user))	
			return false;
		$user->username = $this->username;
		$user->email = $this->email;
		$user->firstname = $this->firstname;
		$user->lastname = $this->lastname;
		$user->role = $this->role;
		if(!empty($this->password))
			$user->setPassword($this->password);
		return $user->save();

		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;


	}
}
