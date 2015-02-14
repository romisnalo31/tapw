<?php
/* @var $this TipoContenidoController */
/* @var $model TipoContenido */

$this->breadcrumbs=array(
	'Tipo Contenidos'=>array('index'),
	$model->id_tipo_contenido=>array('view','id'=>$model->id_tipo_contenido),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoContenido', 'url'=>array('index')),
	array('label'=>'Create TipoContenido', 'url'=>array('create')),
	array('label'=>'View TipoContenido', 'url'=>array('view', 'id'=>$model->id_tipo_contenido)),
	array('label'=>'Manage TipoContenido', 'url'=>array('admin')),
);
?>

<h1>Update TipoContenido <?php echo $model->id_tipo_contenido; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>