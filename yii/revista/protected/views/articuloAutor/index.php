<?php
/* @var $this ArticuloAutorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articulo Autors',
);

$this->menu=array(
	array('label'=>'Create ArticuloAutor', 'url'=>array('create')),
	array('label'=>'Manage ArticuloAutor', 'url'=>array('admin')),
);
?>

<h1>Articulo Autors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
