<?php
/* @var $this DeviceBrandsController */
/* @var $model DeviceBrands */

$this->breadcrumbs=array(
	'Device Brands'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeviceBrands', 'url'=>array('index')),
	array('label'=>'Create DeviceBrands', 'url'=>array('create')),
	array('label'=>'Update DeviceBrands', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeviceBrands', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeviceBrands', 'url'=>array('admin')),
);
?>

<h1>View DeviceBrands #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'device_brand_name',
	),
)); ?>
