<?php
/* @var $this IndiceArticuloController */
/* @var $model IndiceArticulo */

$this->breadcrumbs=array(
	'Indice Articulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IndiceArticulo', 'url'=>array('index')),
	array('label'=>'Manage IndiceArticulo', 'url'=>array('admin')),
);
?>

<h1>Create IndiceArticulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>