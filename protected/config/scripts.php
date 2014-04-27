<?php
return array(
		'scriptMap'=>array(
				'jquery.js'=>'//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js',
				'bootstrap.js'=>'//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js',
				'bootstrap.min.js'=>'//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js',
				'bootstrap.css' => '//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css',
				'bootstrap-theme.css' => '/bittiraha-api/themes/bittiraha/css/bootstrap-theme.min.css',
				'fontawesome.css' => '//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css',
				'fontandika.css' => '//fonts.googleapis.com/css?family=Andika&subset=latin,latin-ext',
				'jquery-ui.js' => '//code.jquery.com/ui/1.10.3/jquery-ui.js',
				'jquery-ui.css'=>'//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css',
				'handlebars.js'=>'//cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.1.2/handlebars.min.js',
				'angular.min.js' => '//ajax.googleapis.com/ajax/libs/angularjs/1.0.1/angular.min.js',
				'angular-resource.min.js' => '//ajax.googleapis.com/ajax/libs/angularjs/1.0.1/angular-resource.min.js',
				'angular-ui-router.min.js' => '//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js',
				'ui-bootstrap-tpls.min.js' => '//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js',
				'ui-bootstrap.min.js' => '//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap.min.js',
				'ng-grid.js' => '//cdnjs.cloudflare.com/ajax/libs/ng-grid/2.0.7/ng-grid.js',
				'ng-grid.css' => '//cdnjs.cloudflare.com/ajax/libs/ng-grid/2.0.7/ng-grid.css',
				'html5shiv.js' => '//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js'
				//'main.css' => '/css/main.css',
				//'main.js' => '/js/main.js'

		),
		'packages' => array(
				'jquery-ui' => array(
						'js'=>array('jquery-ui.js'),
						'css'=>array('jquery-ui.css'),
						'depends'=>array('jquery'),
				),
				'html5shiv' => array(
						'js'=>array('html5shiv.js'),
						'depends'=>array('jquery'),
				),
				'yui' => array(
						'basePath'=>'webroot.js.vendor',
						'js'=>array('yui-min.js')
				),
				'modernizr-respond' => array(
						'basePath'=>'webroot.js.vendor',
						'js'=>array('modernizr-2.6.2-respond-1.1.0.min.js'),
						'depends'=>array('jquery'),
				),
				'underscore' => array(
						'basePath'=>'webroot.js.vendor',
						'js'=>array('underscore-min.js'),
						'depends'=>array('jquery'),
				),
				'backbone' => array(
						'basePath'=>'webroot.js.vendor',
						'js'=>array('backbone-min.js', 'handlebars.js'),
						'depends'=>array('underscore'),
				),
				'bootstrap'=> array(
						'js'=>array('bootstrap.min.js'),
						'css'=>array(
								'bootstrap.css',
								//'bootstrap-theme.css'
						),
						'depends'=>array('jquery'),
				),
				'fontandika'=> array(
						'css'=>array('fontandika.css'),
				),
				'fontawesome'=> array(
						'css'=>array('fontawesome.css'),
				),
				'main'=> array(
						'depends'=>array('modernizr-respond','fontawesome','bootstrap','main-js','main-css'),
				),
				'main-js'=> array(
						'basePath'=>'webroot.js',
						'js'=>array('main.js'),
				),
				'main-css'=> array(
						'basePath'=>'webroot.css',
						'css'=>array('main.css'),
				),
				'multiselect' => array(
						'js'=>array('vendor/bootstrap-multiselect.js'),
						'css'=>array('bootstrap-multiselect.css'),
						'depends'=>array('bootstrap'),
				),
				'angular' => array(
						'js'=>array('angular.min.js'),
				),
				'angular-ui-router' => array(
						'js'=>array('angular-ui-router.min.js'),
				),
				'angular-ui-bootstrap' => array(
						'js'=>array('ui-bootstrap-tpls.min.js'), 'ui-bootstrap.min.js',
				),
				'angular-resource' => array(
						'js'=>array('angular-resource.min.js'),
				),
				'ng-grid' => array(
						'js'=>array('ng-grid.js'),
						'css'=>array('ng-grid.css'),
						'depends'=>array('angular','jquery'),
				),
		)
);