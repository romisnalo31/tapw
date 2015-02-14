<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */

$this->breadcrumbs=array(
	'Articulo Autors'=>array('index'),
	$model->id_articulo_autor=>array('view','id'=>$model->id_articulo_autor),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArticuloAutor', 'url'=>array('index')),
	array('label'=>'Create ArticuloAutor', 'url'=>array('create')),
	array('label'=>'View ArticuloAutor', 'url'=>array('view', 'id'=>$model->id_articulo_autor)),
	array('label'=>'Manage ArticuloAutor', 'url'=>array('admin')),
);
?>

<h1>Update ArticuloAutor <?php echo $model->id_articulo_autor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>