<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('navbar','Profile');
$this->breadcrumbs=array(
	Yii::t('navbar','Profile'),
);
?>

<h1><?=Yii::t('navbar','Profile');?></h1>

<p><?=Yii::t('profile','Update your profile details');?></p>


<div class="row form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div class="span5">
	<p class="note"><?=Yii::t('login','Fields with <span class="required">*</span> are required.');?></p>
	<div class="row">
		<div class="span2"><?php echo $form->labelEx($model,'firstname'); ?></div>
		<div class="span2"><?php echo $form->textField($model,'firstname'); ?></div>
		<div class="span2"><?php echo $form->error($model,'firstname'); ?></div>
	</div>
	<div class="row">
		<div class="span2"><?php echo $form->labelEx($model,'lastname'); ?></div>
		<div class="span2"><?php echo $form->textField($model,'lastname'); ?></div>
		<div class="span2"><?php echo $form->error($model,'lastname'); ?></div>
	</div>
	<div class="row">
		<div class="span2"><?php echo $form->labelEx($model,'username'); ?></div>
		<div class="span2"><?php echo $form->textField($model,'username'); ?></div>
		<div class="span2"><?php echo $form->error($model,'username'); ?></div>
	</div>

	<div class="row">
		<div class="span2"><?php echo $form->labelEx($model,'email'); ?></div>
		<div class="span2"><?php echo $form->textField($model,'email'); ?></div>
		<div class="span2"><?php echo $form->error($model,'email'); ?></div>
	</div>

	<div class="row">
		<div class="span2"><?php echo $form->labelEx($model,'password'); ?></div>
		<div class="span2"><?php echo $form->passwordField($model,'password'); ?></div>
		<div class="span2"><?php echo $form->error($model,'password'); ?></div>
	</div>

	<div class="row">
		<div class="span2"><?php echo $form->labelEx($model,'password_repeat'); ?></div>
		<div class="span2"><?php echo $form->passwordField($model,'password_repeat'); ?></div>
		<div class="span2"><?php echo $form->error($model,'password_repeat'); ?></div>
	</div>

	<div class="row buttons">
		<div class="span2"><?php echo CHtml::submitButton(Yii::t('profile','Save')); ?></div>
	</div>

<?php $this->endWidget(); ?>
</div><!-- span4 -->
<div class="span3 fpitem" style="margin-left:10px;">
<p><?=Yii::t('profile','Gravatar image based your email address');?></p><br />
<?php
$this->widget('ext.yii-gravatar.YiiGravatar', array(
    'email'=> $model->email,
    'size'=>80,
    'defaultImage'=>'http://www.gravatar.com/avatar/00000000000000000000000000000000',
    'secure'=>true,
    'rating'=>'r',
    'emailHashed'=>false,
    'htmlOptions'=>array(
        'alt'=>Yii::t('profile','Gravatar image'),
        'title'=>Yii::t('profile','Gravatar image'),
	'class'=>''
    )
)); ?>
</div>
</div><!-- form -->

