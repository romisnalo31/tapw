<?php
/* @var $this IndiceController */
/* @var $model Indice */

$this->breadcrumbs=array(
	'Indices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Indice', 'url'=>array('index')),
	array('label'=>'Manage Indice', 'url'=>array('admin')),
);
?>

<h1>Create Indice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>