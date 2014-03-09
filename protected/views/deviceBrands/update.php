<?php
/* @var $this DeviceBrandsController */
/* @var $model DeviceBrands */

$this->breadcrumbs=array(
	'Device Brands'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeviceBrands', 'url'=>array('index')),
	array('label'=>'Create DeviceBrands', 'url'=>array('create')),
	array('label'=>'View DeviceBrands', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeviceBrands', 'url'=>array('admin')),
);
?>

<h1>Update DeviceBrands <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>