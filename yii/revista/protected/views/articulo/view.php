<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->id_articulo,
);

$this->menu=array(
	array('label'=>'List Articulo', 'url'=>array('index')),
	array('label'=>'Create Articulo', 'url'=>array('create')),
	array('label'=>'Update Articulo', 'url'=>array('update', 'id'=>$model->id_articulo)),
	array('label'=>'Delete Articulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_articulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Articulo', 'url'=>array('admin')),
);
?>

<h1>View Articulo #<?php echo $model->id_articulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_articulo',
		'nombre',
		'resumen',
		'abstrac',
		'introduccion',
		'metodologia',
		'contenido',
		'fecha_creacion',
		'archivo_pdf',
		'id_status',
		'conclusiones',
		'agradecimientos',
		'referencias',
		'id_indice_articulo',
	),
)); ?>
