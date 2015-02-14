<?php
/* @var $this TipoContenidoController */
/* @var $data TipoContenido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_contenido')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_contenido), array('view', 'id'=>$data->id_tipo_contenido)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>