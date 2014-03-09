<?php
/* @var $this DevicesController */
/* @var $model Devices */
/* @var $form CActiveForm */
?>
 <?php $ID_User = Yii::app()-> session['id_user']; ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'devices-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'device_type_id'); ?>
		<?php echo $form->dropDownList($model,'device_type_id', CHtml::listData(DeviceTypes::model()->findAll(), 'id', 'device_type_name'), array('empty'=>'Select type')); ?>
		<?php echo $form->error($model,'device_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device_brand_id'); ?>
		<?php echo $form->dropDownList($model,'device_brand_id', CHtml::listData(DeviceBrands::model()->findAll(), 'id', 'device_brand_name'), array('empty'=>'Select brand')); ?>
		<?php echo $form->error($model,'device_brand_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device_model_id'); ?>
		<?php echo $form->dropDownList($model,'device_model_id', CHtml::listData(DeviceModels::model()->findAll(), 'id', 'device_model_name'), array('empty'=>'Select model')); ?>
		<?php echo $form->error($model,'device_model_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'device_owner'); ?>
		<?php echo $form->textField($model,'device_owner',array('value'=>$ID_User)); ?>
		<?php //echo $form->dropDownList($model,'device_owner', CHtml::listData(User::model()->findAll(), 'id', 'username'), array('empty'=>'Select Owner')); ?>
		<?php echo $form->error($model,'device_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device_code'); ?>
		<?php echo $form->textField($model,'device_code',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'device_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device_created_date'); ?>
		<?php echo $form->textField($model,'device_created_date'); ?>
		<?php echo $form->error($model,'device_created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device_buy_date'); ?>
		<?php echo $form->textField($model,'device_buy_date'); ?>
		<?php echo $form->error($model,'device_buy_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device_warranty_expire'); ?>
		<?php echo $form->textField($model,'device_warranty_expire'); ?>
		<?php echo $form->error($model,'device_warranty_expire'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php 
/*

		<?php 
			//$list = CHtml::listData(DeviceTypes::model()->findAll(array('order' => 'device_type_name')), 'device_type_id', 'device_type_name');
        	//echo $form->dropDownList($model, 'device_type_id', $list);
        ?>
		<?php
			//$list = CHtml::listData(DeviceTypes::model()->findAll(array('order' => 'device_type_name')), 'id', 'device_type_name'); 
			//echo $form->dropDownList($model,'device_type_id', $list , array('empty'=>'Select Device Type')); 
		?>
		<?php
			//echo CHtml::activeDropDownList( $model,'device_types',
       		//		CHtml::listData(DeviceTypes::model()->findAll(),'device_type_id', 'device_type_name'));
		?>


*/
?>