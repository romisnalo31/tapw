<?php
/* @var $this IndiceArticuloController */
/* @var $model IndiceArticulo */

$this->breadcrumbs=array(
	'Indice Articulos'=>array('index'),
	$model->id_indice_articulo,
);

$this->menu=array(
	array('label'=>'List IndiceArticulo', 'url'=>array('index')),
	array('label'=>'Create IndiceArticulo', 'url'=>array('create')),
	array('label'=>'Update IndiceArticulo', 'url'=>array('update', 'id'=>$model->id_indice_articulo)),
	array('label'=>'Delete IndiceArticulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_indice_articulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndiceArticulo', 'url'=>array('admin')),
);
?>

<h1>View IndiceArticulo #<?php echo $model->id_indice_articulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_indice_articulo',
		'id_indice',
		'numero',
	),
)); ?>
