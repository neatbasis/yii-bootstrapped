<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="hero-unit">
   <div id="assets">
	<h1><?php echo Yii::t('index','Yii Bootstrapped site');?>
	</h1>
	<h2><?php echo Yii::t('index','a combination of all that is good');?></h2>
	<div class="row breathe">
		<div class="col-md-12">
			<img class="lightround" src="<?=UrlHelper::imageUrl('keys.jpg');?>" alt=""/>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-3 fpitem" style="float:right">
			<a class="twitter-timeline" href="https://twitter.com/SebastianMaki" data-widget-id="453942097607794688">Tweets by @SebastianMaki</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		<div class="col-md-9 fpitem">
			<a href="<?=$this->createAbsoluteUrl('/site/page', array('view'=>'about'));?>">
				<img src="<?=UrlHelper::imageUrl('coffee_grind.jpg');?>" alt=""/>
			</a>
			<p><?=Yii::t('index','about-first');?></p>
				<a class="btn btn-primary btn-large" href="<?=$this->createAbsoluteUrl('/site/page', array('view'=>'about'));?>"><?=Yii::t('index','Learn more');?> &raquo;</a>
			</p>
		</div>
<?php if(false): ?>
		<div class="col-md-3 fpitem" style="clear:left">
			<a href="<?=$this->createAbsoluteUrl('/site/page', array('view'=>'console-mods'));?>">
				<img src="<?=UrlHelper::imageUrl('playtime.jpg');?>" alt=""/>
			</a>
			<p><?=Yii::t('index','text-second');?></p>
				<a class="btn btn-primary btn-large" href="<?=$this->createAbsoluteUrl('/site/page', array('view'=>'console-mods'));?>"><?=Yii::t('index','Learn more');?> &raquo;</a>
			</p>
		</div>
		<div class="col-md-3 fpitem">
			<a href="<?=$this->createAbsoluteUrl('/site/page', array('view'=>'computer-maintenance-mods'));?>">
				<img src="<?=UrlHelper::imageUrl('793px-FloorGoban.JPG');?>" alt=""/>
			</a>
			<p><?=Yii::t('index','text-third');?></p>
				<a class="btn btn-primary btn-large" href="<?=$this->createAbsoluteUrl('/site/page', array('view'=>'computer-maintenance-mods'));?>"><?=Yii::t('index','Learn more');?> &raquo;</a>
			</p>
		</div>
<?php endif;?>
	</div>

</div>
