<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<div class="span6 fpitem view">
	<?php if(!Yii::app()->user->isGuest):?>
	<a class="btn" style="float:right" title="<?=Yii::t('post','Edit');?>" href="<?=$this->createAbsoluteUrl('/post/update', array('id'=>$model->id));?>"><b class="icon icon-edit" >&nbsp;</b></a>
	<?php endif;?>
	<small class="published"><b><?=Yii::t('post','Published:');?></b> <?php echo CHtml::encode(DateHelper::formatDate($model->created, Yii::app()->language)); ?> <b><?=Yii::t('post','Written by:');?></b>
	<?php echo CHtml::encode($model->user->firstname . ' '.$model->user->lastname); ?> </small>
	<h3><?php echo CHtml::encode($model->title); ?></h3>
	
	<br />
	<?php echo $model->content; ?>
	<small><?php echo CHtml::encode($model->getAttributeLabel('modified')); ?> 
	<?php echo CHtml::encode($model->modified); ?></small>
	<br />
</div>
