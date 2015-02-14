<?php
/* @var $this RecursosController */
/* @var $model Recursos */

$this->breadcrumbs=array(
	'Recursoses'=>array('index'),
	$model->id_recurso=>array('view','id'=>$model->id_recurso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recursos', 'url'=>array('index')),
	array('label'=>'Create Recursos', 'url'=>array('create')),
	array('label'=>'View Recursos', 'url'=>array('view', 'id'=>$model->id_recurso)),
	array('label'=>'Manage Recursos', 'url'=>array('admin')),
);
?>

<h1>Update Recursos <?php echo $model->id_recurso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>