<?php
/* @var $this TipoContenidoController */
/* @var $model TipoContenido */

$this->breadcrumbs=array(
	'Tipo Contenidos'=>array('index'),
	$model->id_tipo_contenido,
);

$this->menu=array(
	array('label'=>'List TipoContenido', 'url'=>array('index')),
	array('label'=>'Create TipoContenido', 'url'=>array('create')),
	array('label'=>'Update TipoContenido', 'url'=>array('update', 'id'=>$model->id_tipo_contenido)),
	array('label'=>'Delete TipoContenido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_contenido),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoContenido', 'url'=>array('admin')),
);
?>

<h1>View TipoContenido #<?php echo $model->id_tipo_contenido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_contenido',
		'tipo',
	),
)); ?>
