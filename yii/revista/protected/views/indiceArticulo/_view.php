<?php
/* @var $this IndiceArticuloController */
/* @var $data IndiceArticulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_indice_articulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_indice_articulo), array('view', 'id'=>$data->id_indice_articulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_indice')); ?>:</b>
	<?php echo CHtml::encode($data->id_indice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />


</div>