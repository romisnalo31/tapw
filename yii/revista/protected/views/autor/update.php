<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	$model->id_autor=>array('view','id'=>$model->id_autor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Autor', 'url'=>array('index')),
	array('label'=>'Create Autor', 'url'=>array('create')),
	array('label'=>'View Autor', 'url'=>array('view', 'id'=>$model->id_autor)),
	array('label'=>'Manage Autor', 'url'=>array('admin')),
);
?>

<h1>Update Autor <?php echo $model->id_autor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>