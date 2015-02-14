<?php
/* @var $this IndiceController */
/* @var $data Indice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_indice')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_indice), array('view', 'id'=>$data->id_indice)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_revista')); ?>:</b>
	<?php echo CHtml::encode($data->id_revista); ?>
	<br />


</div>