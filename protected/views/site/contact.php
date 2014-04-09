<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('navbar','Contact us');
$this->breadcrumbs=array(
	Yii::t('navbar','Contact us'),
);
?>
<div class="row">
	<div class="span8">
		<h2><?=Yii::t('navbar','Contact us');?></h2>

		<?php if(Yii::app()->user->hasFlash('contact')): ?>

		<div class="flash-success">
			<?php echo Yii::app()->user->getFlash('contact'); ?>
		</div>
		<br /><br />
		<a class="btn btn-primary btn-large" href="<?=$this->createAbsoluteUrl('/');?>"><?=Yii::t('contact','Back to front page');?>&raquo;</a>
		
		<?php else: ?>

		<p>
		<?=Yii::t('contact','If you have inquiries or other questions, please fill out the following form to contact us. Thank you.');?>
		</p>
		<p>
		<a href="mailto:<?=Yii::app()->params['adminEmail'];?>"><?=Yii::t('contact','Or you can just email us');?></a>
		</p>
		<div class="form">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'contact-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

			<p class="note"><?=Yii::t('login','Fields with <span class="required">*</span> are required.');?></p>

			<?php echo $form->errorSummary($model); ?>

			<div class="row">
				<div class="span8">
					<?php echo $form->labelEx($model,'name'); ?>
					<?php echo $form->textField($model,'name'); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>
			</div>

			<div class="row">
				<div class="span8">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email'); ?>
				<?php echo $form->error($model,'email'); ?>
				</div>
			</div>

			<div class="row">
				<div class="span8">
				<?php echo $form->labelEx($model,'subject'); ?>
				<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
				<?php echo $form->error($model,'subject'); ?>
				</div>
			</div>

			<div class="row">
				<div class="span8">
				<?php echo $form->labelEx($model,'body'); ?>
				<?php echo $form->textArea($model,'body',array('rows'=>8, 'cols'=>250)); ?>
				<?php echo $form->error($model,'body'); ?>
				</div>
			</div>

			<?php if(CCaptcha::checkRequirements()): ?>
			<div class="row">
			<div class="span8">
				<?php echo $form->labelEx($model,'verifyCode'); ?>
				<div>
				<?php $this->widget('CCaptcha'); ?>
				<?php echo $form->textField($model,'verifyCode'); ?>
				</div>
				<div class="hint"><?=Yii::t('contact','Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.');?>
				</div>
				<?php echo $form->error($model,'verifyCode'); ?>
			</div></div>
			<?php endif; ?>

			<div class="row buttons"><div class="span8">
				<?php echo CHtml::submitButton(Yii::t('contact','Submit')); ?>
			</div></div>

		<?php $this->endWidget(); ?>

		</div><!-- form -->

		<?php endif; ?>

	</div>
</div>
