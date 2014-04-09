<?php
/* @var $this SiteController */
$title = Yii::t('navbar','Calendar');
$this->pageTitle=Yii::app()->name . ' - '.$title;
$this->breadcrumbs=array(
	$title,
);
?>

<div class="row">
	<div class="span5">
		<h2><?=$title;?></h2>
	</div>
	<div  class="span8 pitem">
		<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;hl=<?=Yii::app()->language;?>&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=phvd9bqbd18ov9msnc80j86su4%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Europe%2FHelsinki" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
	</div>
</div>
