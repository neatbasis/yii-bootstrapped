
<div class="form">
<?php $form=$this->beginWidget('EBootstrapActiveForm', array(
	'id'=>'login-form',
	'focus'=>array($model,'username')
)); ?>
<div class="row">
	<div class="col-md-4">
		<?php $this->widget('ext.eauth.EAuthWidget', array('action' => '/o/oauth2/login'));?>
		<?=$form->bootstrapTextField($model,'username'); ?>
		<?=$form->bootstrapPasswordField($model,'password'); ?>
		<?=$form->bootstrapCheckBox($model,'rememberMe'); ?>
		<?=$form->submitButton(Yii::t('navbar','Login')); ?>
	</div>
</div>
	
<?php $this->endWidget(); ?>
</div><!-- form -->


