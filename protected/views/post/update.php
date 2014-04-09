<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	Yii::t('post','Posts')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('post','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('post','List Post'), 'url'=>array('index')),
	array('label'=>Yii::t('post','Create Post'), 'url'=>array('create')),
	array('label'=>Yii::t('post','View Post'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('post','Manage Post'), 'url'=>array('admin')),
);
?>

<h1><?=Yii::t('post','Edit Post');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
