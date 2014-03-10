<?php
/* @var $this DevicesController */
/* @var $data Devices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device_type_name')); ?>:</b>
        <?php echo CHtml::encode($data->device_types->device_type_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device_brand_name')); ?>:</b>
	<?php echo CHtml::encode($data->device_brands->device_brand_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device_brand_name')); ?>:</b>
	<?php echo CHtml::encode($data->device_models->device_model_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device_owner')); ?>:</b>
	<?php echo CHtml::encode($data->profiles->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device_code')); ?>:</b>
	<?php echo CHtml::encode($data->device_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device_created_date')); ?>:</b>
	<?php echo CHtml::encode($data->device_created_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('device_buy_date')); ?>:</b>
	<?php echo CHtml::encode($data->device_buy_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device_warranty_expire')); ?>:</b>
	<?php echo CHtml::encode($data->device_warranty_expire); ?>
	<br />

	*/ ?>

</div>