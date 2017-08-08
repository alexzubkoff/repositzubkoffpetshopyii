<?php
/* @var $this TeamsController */
/* @var $model Teams */

$this->breadcrumbs=array(
	'Teams'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Teams', 'url'=>array('index')),
	array('label'=>'Create Teams', 'url'=>array('create')),
	array('label'=>'Update Teams', 'url'=>array('update', 'id'=>$model->t_id)),
	array('label'=>'Delete Teams', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->t_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Teams', 'url'=>array('admin')),
);
?>

<h1>View Teams #<?php echo $model->t_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		't_id',
		'name',
		'project',
	),
)); ?>
