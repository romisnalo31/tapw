<?php
/* @var $this TipoContenidoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Contenidos',
);

$this->menu=array(
	array('label'=>'Create TipoContenido', 'url'=>array('create')),
	array('label'=>'Manage TipoContenido', 'url'=>array('admin')),
);
?>

<h1>Tipo Contenidos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
