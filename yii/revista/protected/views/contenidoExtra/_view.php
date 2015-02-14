<?php
/* @var $this ContenidoExtraController */
/* @var $data ContenidoExtra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contenido_extra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contenido_extra), array('view', 'id'=>$data->id_contenido_extra)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('archivo_pdf')); ?>:</b>
	<?php echo CHtml::encode($data->archivo_pdf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_contenido')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_contenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_indice_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->id_indice_articulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
	<?php echo CHtml::encode($data->contenido); ?>
	<br />


</div>