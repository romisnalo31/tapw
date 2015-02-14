<?php
/* @var $this ContenidoExtraController */
/* @var $model ContenidoExtra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contenido-extra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textArea($model,'nombre',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'archivo_pdf'); ?>
		<?php echo $form->textField($model,'archivo_pdf',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'archivo_pdf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_contenido'); ?>
		<?php echo $form->textField($model,'id_tipo_contenido'); ?>
		<?php echo $form->error($model,'id_tipo_contenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_indice_articulo'); ?>
		<?php echo $form->textField($model,'id_indice_articulo'); ?>
		<?php echo $form->error($model,'id_indice_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contenido'); ?>
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'contenido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->