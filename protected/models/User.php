<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $role
 */
Yii::import('application.components.password', true);
class User extends CActiveRecord
{
	public function __construct($scenario='insert')
	{
		
		parent::__construct($scenario);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, email', 'required'),
			array('username, password, firstname, lastname, email', 'length', 'max'=>255),
			array('role', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, firstname, lastname, email, role', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'posts' => array(self::HAS_MANY, 'Post', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'email' => 'Email',
			'role' => 'Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('role',$this->role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * Checks if the given secret is correct.
	 * @param string the secret to be validated
	 * @return boolean whether the secret is valid
	 */
	public function validatePassword($password)
	{
		$options = array("cost" => 10);
		$algorithm = PASSWORD_DEFAULT;
		
		if (password_verify($password, $this->password)) {
		    if (password_needs_rehash($this->password, $algorithm, $options)) {
		        $this->password = password_hash($password, $algorithm, $options);
		        $this->update(array('password'));
		    }
		    return true;
		}
		return false;
	}
	
	/**
	 * Generate a salt and set the user secret using the salt. Original secret cannot be deduced from the salted one.
	 * @param string $secret
	 * @throws Exception
	 */
	public function setPassword($password){
		$options = array("cost" => 10);
		$algorithm = PASSWORD_DEFAULT;
		$this->password = password_hash($password, $algorithm, $options);
		return true;
	}
}
