<?php
/* @var $this LocationsController */
/* @var $data Locations */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locations_name')); ?>:</b>
	<?php echo CHtml::encode($data->locations_name); ?>
	<br />


</div>