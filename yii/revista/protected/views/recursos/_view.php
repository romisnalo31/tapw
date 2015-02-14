<?php
/* @var $this RecursosController */
/* @var $data Recursos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_recurso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_recurso), array('view', 'id'=>$data->id_recurso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_recurso')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_recurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_recurso')); ?>:</b>
	<?php echo CHtml::encode($data->url_recurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />


</div>