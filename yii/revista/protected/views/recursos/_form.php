<?php
/* @var $this RecursosController */
/* @var $model Recursos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recursos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_recurso'); ?>
		<?php echo $form->textField($model,'nombre_recurso',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre_recurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_recurso'); ?>
		<?php echo $form->textField($model,'url_recurso',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'url_recurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->