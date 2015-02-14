<?php
/* @var $this ArticuloAutorController */
/* @var $data ArticuloAutor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articulo_autor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_articulo_autor), array('view', 'id'=>$data->id_articulo_autor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->id_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_autor')); ?>:</b>
	<?php echo CHtml::encode($data->id_autor); ?>
	<br />


</div>