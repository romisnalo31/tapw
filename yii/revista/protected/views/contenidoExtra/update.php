<?php
/* @var $this ContenidoExtraController */
/* @var $model ContenidoExtra */

$this->breadcrumbs=array(
	'Contenido Extras'=>array('index'),
	$model->id_contenido_extra=>array('view','id'=>$model->id_contenido_extra),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContenidoExtra', 'url'=>array('index')),
	array('label'=>'Create ContenidoExtra', 'url'=>array('create')),
	array('label'=>'View ContenidoExtra', 'url'=>array('view', 'id'=>$model->id_contenido_extra)),
	array('label'=>'Manage ContenidoExtra', 'url'=>array('admin')),
);
?>

<h1>Update ContenidoExtra <?php echo $model->id_contenido_extra; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>