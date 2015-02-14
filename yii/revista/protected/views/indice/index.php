<?php
/* @var $this IndiceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Indices',
);

$this->menu=array(
	array('label'=>'Create Indice', 'url'=>array('create')),
	array('label'=>'Manage Indice', 'url'=>array('admin')),
);
?>

<h1>Indices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
