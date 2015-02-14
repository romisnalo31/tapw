<?php
/* @var $this RecursosController */
/* @var $model Recursos */

$this->breadcrumbs=array(
	'Recursoses'=>array('index'),
	$model->id_recurso,
);

$this->menu=array(
	array('label'=>'List Recursos', 'url'=>array('index')),
	array('label'=>'Create Recursos', 'url'=>array('create')),
	array('label'=>'Update Recursos', 'url'=>array('update', 'id'=>$model->id_recurso)),
	array('label'=>'Delete Recursos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_recurso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recursos', 'url'=>array('admin')),
);
?>

<h1>View Recursos #<?php echo $model->id_recurso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_recurso',
		'nombre_recurso',
		'url_recurso',
		'id_usuario',
	),
)); ?>
