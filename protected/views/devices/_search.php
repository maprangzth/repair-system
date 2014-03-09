<?php
/* @var $this DevicesController */
/* @var $model Devices */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device_type_id'); ?>
		<?php echo $form->textField($model,'device_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device_brand_id'); ?>
		<?php echo $form->textField($model,'device_brand_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device_model_id'); ?>
		<?php echo $form->textField($model,'device_model_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device_owner'); ?>
		<?php echo $form->textField($model,'device_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device_code'); ?>
		<?php echo $form->textField($model,'device_code',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device_created_date'); ?>
		<?php echo $form->textField($model,'device_created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device_buy_date'); ?>
		<?php echo $form->textField($model,'device_buy_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device_warranty_expire'); ?>
		<?php echo $form->textField($model,'device_warranty_expire'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->