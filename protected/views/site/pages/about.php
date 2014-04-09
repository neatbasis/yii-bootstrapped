<?php
/* @var $this SiteController */
$title = Yii::t('navbar','About');
$this->pageTitle=Yii::app()->name . ' - '.$title;
$this->breadcrumbs=array(
	$title,
);
?>

<div class="row">
	<div class="span5">
		<h2><?=$title;?></h2>
		<?=Yii::t('about','about-text');?>
		<p><?=Yii::t('about','You can email us at');?> <a href="mailto:<?=Yii::app()->params['adminEmail'];?>"><?=Yii::app()->params['adminEmail'];?></a></p>
	</div>
	<div class="span4 pitem">
		<img src="<?=UrlHelper::imageUrl('coffee_grind.jpg');?>" alt=""/>
	</div>
</div>
