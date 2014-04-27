<?php /* @var $this Controller */ 
$cs = Yii::app()->clientScript;
$cs->registerPackage('main');
$cs->registerPackage('html5shiv');

$angular = empty($cs->getPackageBaseUrl('angular'))?'':'ng-app';
$ngController = empty($this->ngController)?'':'ng-controller="'.$this->ngController.'"';
$ngApp = empty($this->ngApp)?$angular:$angular.'="'.$this->ngApp.'"';
$lang = str_replace('_', '-', Yii::app()->language);
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" <?php echo $ngApp; ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" <?php echo $ngApp; ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" <?php echo $ngApp; ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" <?php echo $ngApp; ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="language" content="<?php echo $lang; ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script type="text/javascript">var baseUrl = '<?php echo $this->createAbsoluteUrl('/');?>/';</script>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.ico" />
    </head>
    <body >
    	<div id="wrap">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=$this->createAbsoluteUrl('/');?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <?php $this->widget('application.widgets.MenuWidget'); ?>
			
        </div><!--/.navbar-collapse -->
      </div>
    </div>
        <div class="container">
        	<?php //$this->widget('EBootstrapFlashMessages'); ?>
        	<?php echo $content; ?>


        </div> <!-- /container -->
        <div id="push"></div><!-- /wrap -->
        </div><!-- /wrap -->
		<div id="footer">
			<div class="container">
				
	                <p class="muted credit">&copy; 2013 Prasos Oy</p>
	            
            </div>
        </div><!-- /footer -->


        <script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', '<?=Yii::app()->params['googleAnalyticsCode']?>']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
    </body>
</html>
