<?php
/* @var $this RecursosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recursoses',
);

$this->menu=array(
	array('label'=>'Create Recursos', 'url'=>array('create')),
	array('label'=>'Manage Recursos', 'url'=>array('admin')),
);
?>

<h1>Recursoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
