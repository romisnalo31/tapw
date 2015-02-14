<?php
/* @var $this RevistaController */
/* @var $data Revista */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_revista')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_revista), array('view', 'id'=>$data->id_revista)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portada')); ?>:</b>
	<?php echo CHtml::encode($data->portada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('volumen')); ?>:</b>
	<?php echo CHtml::encode($data->volumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitulo')); ?>:</b>
	<?php echo CHtml::encode($data->subtitulo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('directorio')); ?>:</b>
	<?php echo CHtml::encode($data->directorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('editorial')); ?>:</b>
	<?php echo CHtml::encode($data->editorial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status')); ?>:</b>
	<?php echo CHtml::encode($data->id_status); ?>
	<br />

	*/ ?>

</div>