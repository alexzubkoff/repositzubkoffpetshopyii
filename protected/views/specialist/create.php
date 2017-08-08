<?php
/* @var $this SpecialistController */
/* @var $model Specialist */

$this->breadcrumbs=array(
	'Specialists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Specialist', 'url'=>array('index')),
	array('label'=>'Manage Specialist', 'url'=>array('admin')),
);
?>

<h1>Create Specialist</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>