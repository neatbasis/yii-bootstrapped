<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	/**
	 * angularJS parameters
	 * @var string Application name
	 */
	public $ngApp = '';
	/**
	 * angularJS parameters
	 * @var string Controller name
	 */
	public $ngController = '';
	
	/**
	 * Initializes the controller.
	 * This method is called by the application before the controller starts to execute.
	 * You may override this method to perform the needed initialization for the controller.
	 */
	public function init()
	{
		if(!isset(Yii::app()->session['lang']))
			Yii::app()->session['lang'] = Yii::app()->language;
		
		if(isset($_GET['lang'])){
			$lang = $_GET['lang'];
			Yii::app()->session['lang'] = $_GET['lang'];
		}
		
		Yii::app()->setLanguage(Yii::app()->session['lang']);

	}
}