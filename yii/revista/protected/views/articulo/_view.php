<?php
/* @var $this ArticuloController */
/* @var $data Articulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_articulo), array('view', 'id'=>$data->id_articulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resumen')); ?>:</b>
	<?php echo CHtml::encode($data->resumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abstrac')); ?>:</b>
	<?php echo CHtml::encode($data->abstrac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('introduccion')); ?>:</b>
	<?php echo CHtml::encode($data->introduccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metodologia')); ?>:</b>
	<?php echo CHtml::encode($data->metodologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
	<?php echo CHtml::encode($data->contenido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('archivo_pdf')); ?>:</b>
	<?php echo CHtml::encode($data->archivo_pdf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status')); ?>:</b>
	<?php echo CHtml::encode($data->id_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conclusiones')); ?>:</b>
	<?php echo CHtml::encode($data->conclusiones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agradecimientos')); ?>:</b>
	<?php echo CHtml::encode($data->agradecimientos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referencias')); ?>:</b>
	<?php echo CHtml::encode($data->referencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_indice_articulo')); ?>:</b>
	<?php echo CHtml::encode($data->id_indice_articulo); ?>
	<br />

	*/ ?>

</div>