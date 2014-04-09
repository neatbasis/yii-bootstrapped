<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('navbar','Login');
$this->breadcrumbs=array(
	Yii::t('navbar','Login'),
);
?>

<h1><?=Yii::t('navbar','Login');?></h1>

<p><?=Yii::t('login','Please fill out the following form with your login credentials:');?></p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><?=Yii::t('login','Fields with <span class="required">*</span> are required.');?></p>

	<div class="row">
		<div class="span2"><?php echo $form->labelEx($model,'username'); ?></div>
		<div class="span2"><?php echo $form->textField($model,'username'); ?></div>
		<div class="span2"><?php echo $form->error($model,'username'); ?></div>
	</div>

	<div class="row">
		<div class="span2"><?php echo $form->labelEx($model,'password'); ?></div>
		<div class="span2"><?php echo $form->passwordField($model,'password'); ?></div>
		<div class="span2"><?php echo $form->error($model,'password'); ?></div>
		<div class="span2">
			<p class="hint"><?=Yii::t('login','This area is only for administrators');?></p>
		</div>
	</div>

	<div class="row rememberMe">
		<div class="span2"></div>
		<div class="span3"><?php echo $form->checkBox($model,'rememberMe'); ?><?php echo $form->label($model,'rememberMe'); ?></div>
		<div class="span2"><?php echo $form->error($model,'rememberMe'); ?></div>
	</div>

	<div class="row buttons">
		<div class="span2"><?php echo CHtml::submitButton(Yii::t('navbar','Login')); ?></div>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
