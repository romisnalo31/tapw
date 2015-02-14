<?php
/* @var $this ArticuloController */
/* @var $model Articulo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulo-form',
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
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resumen'); ?>
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resumen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abstrac'); ?>
		<?php echo $form->textArea($model,'abstrac',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'abstrac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'introduccion'); ?>
		<?php echo $form->textArea($model,'introduccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'introduccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metodologia'); ?>
		<?php echo $form->textArea($model,'metodologia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metodologia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contenido'); ?>
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'contenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'archivo_pdf'); ?>
		<?php echo $form->textField($model,'archivo_pdf',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'archivo_pdf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status'); ?>
		<?php echo $form->textField($model,'id_status'); ?>
		<?php echo $form->error($model,'id_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conclusiones'); ?>
		<?php echo $form->textArea($model,'conclusiones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conclusiones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agradecimientos'); ?>
		<?php echo $form->textArea($model,'agradecimientos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'agradecimientos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referencias'); ?>
		<?php echo $form->textArea($model,'referencias',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'referencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_indice_articulo'); ?>
		<?php echo $form->textField($model,'id_indice_articulo'); ?>
		<?php echo $form->error($model,'id_indice_articulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->