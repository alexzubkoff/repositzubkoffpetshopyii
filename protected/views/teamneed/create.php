<?php
/* @var $this TeamneedController */
/* @var $model Teamneed */

$this->breadcrumbs=array(
	'Teamneeds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Teamneed', 'url'=>array('index')),
	array('label'=>'Manage Teamneed', 'url'=>array('admin')),
);
?>

<h1>Create Teamneed</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>