<?php
/* @var $this DevicesController */
/* @var $model Devices */

$this->breadcrumbs=array(
	'Devices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Devices', 'url'=>array('index')),
	array('label'=>'Create Devices', 'url'=>array('create')),
	array('label'=>'Update Devices', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Devices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Devices', 'url'=>array('admin')),
);
?>

<h1>View Devices #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'device_type_id',
		'device_brand_id',
		'device_model_id',
		'device_owner',
		'device_code',
		'device_created_date',
		'device_buy_date',
		'device_warranty_expire',
	),
)); ?>
