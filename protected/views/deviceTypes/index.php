<?php
/* @var $this DeviceTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Device Types',
);

$this->menu=array(
	array('label'=>'Create DeviceTypes', 'url'=>array('create')),
	array('label'=>'Manage DeviceTypes', 'url'=>array('admin')),
);
?>

<h1>Device Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
