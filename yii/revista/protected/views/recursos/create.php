<?php
/* @var $this RecursosController */
/* @var $model Recursos */

$this->breadcrumbs=array(
	'Recursoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recursos', 'url'=>array('index')),
	array('label'=>'Manage Recursos', 'url'=>array('admin')),
);
?>

<h1>Create Recursos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>