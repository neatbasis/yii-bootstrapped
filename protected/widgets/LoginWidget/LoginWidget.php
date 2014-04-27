<?php
class LoginWidget extends CWidget{
	public $method;
	public $loginUrl = '/o/oauth2/login';
	public $servicelogin = false;
	public function init(){
		Yii::import('ext.eoauth.*');
		Yii::import('ext.eoauth.lib.*');
		Yii::import('ext.lightopenid.*');
		Yii::import('ext.eauth.*');
		Yii::import('ext.eauth.services.*');
		Yii::import('ext.eauth.custom_services.*');
	}
	public function run(){
		$service = Yii::app()->request->getQuery('service');
		if (isset($service)) {
			$authIdentity = Yii::app()->eauth->getIdentity($service);
			$authIdentity->redirectUrl = Yii::app()->user->returnUrl;
			$authIdentity->cancelUrl = $this->controller->createAbsoluteUrl($this->loginUrl);


			try {
				if ($authIdentity->authenticate()) {
					
					$identity = new UserIdentity();
					$auth = Authentication::model()->byService($authIdentity)->findAll();

					$identity->setAuth($auth);

					// successful authentication
					if ($identity->authenticate()) {
						Yii::app()->user->login($identity);
						$authIdentity->redirect();
					}else if ($identity->register($authIdentity)) {
							Yii::app()->user->login($identity);
							$authIdentity->redirect();
					}else{
						throw new CHttpException(500,Yii::t('login','Error while registering, contact staff'));
					}

				}
			} catch (EAuthException $e) {
				throw new CHttpException(500,$e->getMessage());
			}

			// Something went wrong, redirect to login page
			$this->controller->redirect(array($this->loginUrl));
		}
		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo ActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->controller->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		if(Yii::app()->user->isGuest)
			$this->render('login',array('model'=>$model));
	}
}