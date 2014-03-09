<?php
/* @var $this DeviceModelsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Device Models',
);

$this->menu=array(
	array('label'=>'Create DeviceModels', 'url'=>array('create')),
	array('label'=>'Manage DeviceModels', 'url'=>array('admin')),
);
?>

<h1>Device Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
