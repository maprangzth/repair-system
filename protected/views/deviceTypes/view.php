<?php
/* @var $this DeviceTypesController */
/* @var $model DeviceTypes */

$this->breadcrumbs=array(
	'Device Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeviceTypes', 'url'=>array('index')),
	array('label'=>'Create DeviceTypes', 'url'=>array('create')),
	array('label'=>'Update DeviceTypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeviceTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeviceTypes', 'url'=>array('admin')),
);
?>

<h1>View DeviceTypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'device_type_name',
	),
)); ?>
