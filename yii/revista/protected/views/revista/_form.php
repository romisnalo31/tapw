<?php
/* @var $this RevistaController */
/* @var $model Revista */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'revista-form',
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
		<?php echo $form->labelEx($model,'portada'); ?>
		<?php echo $form->textField($model,'portada',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'portada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'volumen'); ?>
		<?php echo $form->textField($model,'volumen',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'volumen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitulo'); ?>
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'subtitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'directorio'); ?>
		<?php echo $form->textArea($model,'directorio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'directorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'editorial'); ?>
		<?php echo $form->textArea($model,'editorial',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'editorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status'); ?>
		<?php echo $form->textField($model,'id_status'); ?>
		<?php echo $form->error($model,'id_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->