<?php
/* @var $this ContenidoExtraController */
/* @var $model ContenidoExtra */

$this->breadcrumbs=array(
	'Contenido Extras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContenidoExtra', 'url'=>array('index')),
	array('label'=>'Manage ContenidoExtra', 'url'=>array('admin')),
);
?>

<h1>Create ContenidoExtra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>