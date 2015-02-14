<?php
/* @var $this IndiceController */
/* @var $model Indice */

$this->breadcrumbs=array(
	'Indices'=>array('index'),
	$model->id_indice=>array('view','id'=>$model->id_indice),
	'Update',
);

$this->menu=array(
	array('label'=>'List Indice', 'url'=>array('index')),
	array('label'=>'Create Indice', 'url'=>array('create')),
	array('label'=>'View Indice', 'url'=>array('view', 'id'=>$model->id_indice)),
	array('label'=>'Manage Indice', 'url'=>array('admin')),
);
?>

<h1>Update Indice <?php echo $model->id_indice; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>