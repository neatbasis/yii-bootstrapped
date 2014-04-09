<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle=Yii::t('post','Blog');
$this->breadcrumbs=array(
	Yii::t('post','Blog'),
);

$this->menu=array(
	array('label'=>Yii::t('post','Create Post'), 'url'=>array('create')),
	array('label'=>Yii::t('post','Manage Post'), 'url'=>array('admin')),
);
?>
<div class="hero-unit">
   <div id="assets">
	<h1><?=Yii::t('post','Posts')?></h1>
	<br />
	<div class="row breathe">
	
			<img class="lightround" src="<?=UrlHelper::imageUrl('SuperMarioWorld1-3.png');?>" alt=""/>
		
	</div>
	<div class="row ">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			'summaryText'=>''
		)); ?>
	</div>

</div>

<br />

