<?php
/* @var $this DeviceModelsController */
/* @var $model DeviceModels */

$this->breadcrumbs=array(
	'Device Models'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeviceModels', 'url'=>array('index')),
	array('label'=>'Create DeviceModels', 'url'=>array('create')),
	array('label'=>'Update DeviceModels', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeviceModels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeviceModels', 'url'=>array('admin')),
);
?>

<h1>View DeviceModels #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'device_model_name',
	),
)); ?>
