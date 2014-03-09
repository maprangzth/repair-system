<?php
/* @var $this DeviceBrandsController */
/* @var $model DeviceBrands */

$this->breadcrumbs=array(
	'Device Brands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeviceBrands', 'url'=>array('index')),
	array('label'=>'Manage DeviceBrands', 'url'=>array('admin')),
);
?>

<h1>Create DeviceBrands</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>