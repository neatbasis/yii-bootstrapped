<?php
$this->pageTitle=CHtml::encode($data->title);
/* @var $this PostController */
/* @var $data Post */
?>

<div class="span6 fpitem view">
	<?php if(!Yii::app()->user->isGuest):?>
	<a class="btn" style="float:right" title="<?=Yii::t('post','Edit');?>" href="<?=$this->createAbsoluteUrl('/post/update', array('id'=>$data->id));?>"><b class="icon icon-edit" >&nbsp;</b></a>
	<?php endif;?>
	<small class="published"><b><?=Yii::t('post','Published:');?></b> <?php echo CHtml::encode(DateHelper::formatDate($data->created, Yii::app()->language)); ?> <b><?=Yii::t('post','Written by:');?></b>
	<?php echo CHtml::encode($data->user->firstname . ' '.$data->user->lastname); ?> </small>
	<h3><a <?php echo CHtml::link($data->title, array('/post/view', 'id'=>$data->id)); ?></h3>
	
	<br />
	<?php echo $data->content; ?>
	<small><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?> 
	<?php echo CHtml::encode($data->modified); ?></small>
	<br />



</div>
