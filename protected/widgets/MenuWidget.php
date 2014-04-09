<?php
class MenuWidget extends CWidget
{

	public function run()
	{
		$this->controller->widget('application.widgets.NavWidget',array(
				'encodeLabel'=>false,
				'htmlOptions'=>array('class'=>'nav'),
				'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
		
				'items'=>array(
				array('label'=>Yii::t('navbar','Home'), 'url'=>array('/site/index')),
				array('label'=>Yii::t('navbar','Blog'), 'url'=>array('/post/index')),
				array('label'=>Yii::t('navbar','Info'), 'url'=>'#',
						'items'=>array(
							array('label'=>Yii::t('navbar','About this page'), 'url'=>array('/site/page', 'view'=>'about')),
						)
				),
				array('label'=>Yii::t('navbar','Events'), 'url'=>'#',
						'items'=>array(
							array('label'=>Yii::t('navbar','Calendar'), 'url'=>array('/site/page', 'view'=>'calendar')),
						)
				),

				array('label'=>Yii::t('navbar','Contact us'), 'url'=>array('/site/contact')),
				array('label'=>'<b class="icon-white icon-flag"></b> '. Yii::t('navbar','Language'), 'url'=>'#',
						'items'=>array(
								array('label'=>'Suomeksi', 'url'=>UrlHelper::currentPage('fi')),
								//array('label'=>'På svenska', 'url'=>UrlHelper::currentPage('sv')),
								array('label'=>'In English', 'url'=>UrlHelper::currentPage('en')),
						)
				),
				//array('label'=>Yii::t('navbar','Login'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>Yii::t('navbar','Logout'), 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('navbar','Profile').' ('.Yii::app()->user->name.')', 'url'=>array('/site/profile'), 'visible'=>!Yii::app()->user->isGuest)
			),
			
		));
	}
}
