<?php
/* @var $this SpecialistController */
/* @var $model Specialist */

$this->breadcrumbs=array(
	'Specialists'=>array('index'),
	$model->name=>array('view','id'=>$model->s_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Specialist', 'url'=>array('index')),
	array('label'=>'Create Specialist', 'url'=>array('create')),
	array('label'=>'View Specialist', 'url'=>array('view', 'id'=>$model->s_id)),
	array('label'=>'Manage Specialist', 'url'=>array('admin')),
);
?>

<h1>Update Specialist <?php echo $model->s_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>