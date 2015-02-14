<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	$model->id_autor,
);

$this->menu=array(
	array('label'=>'List Autor', 'url'=>array('index')),
	array('label'=>'Create Autor', 'url'=>array('create')),
	array('label'=>'Update Autor', 'url'=>array('update', 'id'=>$model->id_autor)),
	array('label'=>'Delete Autor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_autor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Autor', 'url'=>array('admin')),
);
?>

<h1>View Autor #<?php echo $model->id_autor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_autor',
		'nombre',
		'apellidos',
		'email',
	),
)); ?>
