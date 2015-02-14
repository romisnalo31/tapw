<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_articulo_autor'); ?>
		<?php echo $form->textField($model,'id_articulo_autor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_articulo'); ?>
		<?php echo $form->textField($model,'id_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_autor'); ?>
		<?php echo $form->textField($model,'id_autor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->