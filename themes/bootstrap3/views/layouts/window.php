<?php /* @var $this Controller */ 

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.ico" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flags.css" />
	<link href='//fonts.googleapis.com/css?family=Andika&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    	<div id="wrap">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->



        <div class="container">
        	
            <div class="span6"><img src="<?=UrlHelper::imageUrl('logo.png');?>" alt="<?=Yii::t('index','Bittiraha');?>"/></div>
        	<?php echo $content; ?>


        </div> <!-- /container -->
        <div id="push"></div><!-- /wrap -->
        </div><!-- /wrap -->
		<div id="footer">
			<div class="container">
				
	                <p class="muted credit">&copy; 2013 Prasos Oy</p>
	            
            </div>
        </div><!-- /footer 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>-->

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/underscore-min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/backbone-min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/events.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/two.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins.js"></script>
        <script type="text/javascript">
		<?php //$this->renderFile('themes/'.Yii::app()->theme->name.'/js/plugins.js');?>
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
