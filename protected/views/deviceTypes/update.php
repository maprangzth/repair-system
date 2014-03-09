<?php
/* @var $this DeviceTypesController */
/* @var $model DeviceTypes */

$this->breadcrumbs=array(
	'Device Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeviceTypes', 'url'=>array('index')),
	array('label'=>'Create DeviceTypes', 'url'=>array('create')),
	array('label'=>'View DeviceTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeviceTypes', 'url'=>array('admin')),
);
?>

<h1>Update DeviceTypes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>