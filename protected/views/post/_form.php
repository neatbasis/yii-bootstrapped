<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span6">
			<?php echo $form->labelEx($model,'title'); ?>
			<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'title'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span6">
			<?php echo $form->labelEx($model,'content'); ?>
			<?php echo $form->textArea($model,'content',array('class'=>'tinymce','rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'content'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span6">
			<?php echo $form->labelEx($model,'created'); ?>
			<?php
			$this->widget('ext.jui.EJuiDateTimePicker', array(
				'model' => $model,
				'attribute' => 'created',
				'options'   => array(
					'dateFormat' => 'yy-mm-dd',
					'timeFormat' => 'hh:mm:00',//'hh:mm tt' default
				),
				'htmlOptions' => array(
					'size' => '10',         // textField size
					'maxlength' => '10',    // textField maxlength
				),
			));
			?>
			<?php echo $form->error($model,'created'); ?>
		</div>
	</div>


	<?php echo $form->hiddenField($model,'user_id'); ?>
	<?php echo $form->hiddenField($model,'modified'); ?>

	<div class="row buttons">
		<div class="span6">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
