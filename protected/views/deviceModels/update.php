<?php
/* @var $this DeviceModelsController */
/* @var $model DeviceModels */

$this->breadcrumbs=array(
	'Device Models'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeviceModels', 'url'=>array('index')),
	array('label'=>'Create DeviceModels', 'url'=>array('create')),
	array('label'=>'View DeviceModels', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeviceModels', 'url'=>array('admin')),
);
?>

<h1>Update DeviceModels <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>