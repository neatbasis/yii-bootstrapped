<?php
class MenuWidget extends CWidget
{

	public function run()
	{
		$this->controller->widget('application.widgets.NavWidget',array(
				'encodeLabel'=>false,
				'items'=>array(
				array('label'=>Yii::t('navbar','Home'), 'url'=>array('/site/index')),

				
				array('label'=>Yii::t('navbar','Admin'), 'url'=>'#', 'visible'=>Yii::app()->user->checkAccess('admin'),
						'items'=>array(
								array('label'=>Yii::t('navbar','Banks'), 'url'=>array('/bank')),
								array('label'=>Yii::t('navbar','Bank Transactions'), 'url'=>array('/bankTransaction')),
								array('label'=>Yii::t('navbar','Orders admin'), 'url'=>array('/order/admin')),
								array('label'=>Yii::t('navbar','Orders'), 'url'=>array('/order')),
								array('label'=>Yii::t('navbar','Users'), 'url'=>array('/user')),
								array('label'=>Yii::t('navbar','Emails'), 'url'=>array('/email')),
								array('label'=>Yii::t('navbar','Mobiles'), 'url'=>array('/mobile')),
						)
				),

				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),

				
				array('label'=>'<b class="icon-white icon-flag"></b> '. Yii::t('navbar','Language'), 'url'=>'#',
						'items'=>array(
								array('label'=>'Suomeksi', 'url'=>UrlHelper::currentPage('fi')),
								//array('label'=>'På svenska', 'url'=>UrlHelper::currentPage('sv')),
								array('label'=>'In English', 'url'=>UrlHelper::currentPage('en')),
						)
				),
				array('label'=>Yii::t('navbar','Profile'), 'url'=>array('/site/profile'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('navbar','Login'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>Yii::t('navbar','Logout') .'('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
			
		));
	}
}



