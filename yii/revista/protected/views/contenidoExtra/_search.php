<?php
/* @var $this ContenidoExtraController */
/* @var $model ContenidoExtra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_contenido_extra'); ?>
		<?php echo $form->textField($model,'id_contenido_extra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textArea($model,'nombre',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'archivo_pdf'); ?>
		<?php echo $form->textField($model,'archivo_pdf',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_contenido'); ?>
		<?php echo $form->textField($model,'id_tipo_contenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_indice_articulo'); ?>
		<?php echo $form->textField($model,'id_indice_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contenido'); ?>
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->