<?php
/* @var $this TeamneedController */
/* @var $model Teamneed */

$this->breadcrumbs=array(
	'Teamneeds'=>array('index'),
	$model->n_id,
);

$this->menu=array(
	array('label'=>'List Teamneed', 'url'=>array('index')),
	array('label'=>'Create Teamneed', 'url'=>array('create')),
	array('label'=>'Update Teamneed', 'url'=>array('update', 'id'=>$model->n_id)),
	array('label'=>'Delete Teamneed', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->n_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Teamneed', 'url'=>array('admin')),
);
?>

<h1>View Teamneed #<?php echo $model->n_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'n_id',
		'team_id',
		'experience',
	),
)); ?>
