<?php
/* @var $this SpecialistController */
/* @var $model Specialist */

$this->breadcrumbs=array(
	'Specialists'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Specialist', 'url'=>array('index')),
	array('label'=>'Create Specialist', 'url'=>array('create')),
	array('label'=>'Update Specialist', 'url'=>array('update', 'id'=>$model->s_id)),
	array('label'=>'Delete Specialist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->s_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Specialist', 'url'=>array('admin')),
);
?>

<h1>View Specialist #<?php echo $model->s_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		's_id',
		'name',
		'salary',
		'profile',
		'experince',
		'team_id',
	),
)); ?>
