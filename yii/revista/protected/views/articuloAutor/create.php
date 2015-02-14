<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */

$this->breadcrumbs=array(
	'Articulo Autors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticuloAutor', 'url'=>array('index')),
	array('label'=>'Manage ArticuloAutor', 'url'=>array('admin')),
);
?>

<h1>Create ArticuloAutor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>