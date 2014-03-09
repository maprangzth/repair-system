<?php
/* @var $this DeviceModelsController */
/* @var $data DeviceModels */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device_model_name')); ?>:</b>
	<?php echo CHtml::encode($data->device_model_name); ?>
	<br />


</div>