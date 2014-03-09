<?php
/* @var $this DeviceModelsController */
/* @var $model DeviceModels */

$this->breadcrumbs=array(
	'Device Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeviceModels', 'url'=>array('index')),
	array('label'=>'Manage DeviceModels', 'url'=>array('admin')),
);
?>

<h1>Create DeviceModels</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>