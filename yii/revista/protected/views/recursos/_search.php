<?php
/* @var $this RecursosController */
/* @var $model Recursos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_recurso'); ?>
		<?php echo $form->textField($model,'id_recurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_recurso'); ?>
		<?php echo $form->textField($model,'nombre_recurso',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_recurso'); ?>
		<?php echo $form->textField($model,'url_recurso',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->