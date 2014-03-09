<?php
/* @var $this DeviceTypesController */
/* @var $model DeviceTypes */

$this->breadcrumbs=array(
	'Device Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeviceTypes', 'url'=>array('index')),
	array('label'=>'Manage DeviceTypes', 'url'=>array('admin')),
);
?>

<h1>Create DeviceTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>