<?php
/* @var $this TeamneedController */
/* @var $model Teamneed */

$this->breadcrumbs=array(
	'Teamneeds'=>array('index'),
	$model->n_id=>array('view','id'=>$model->n_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Teamneed', 'url'=>array('index')),
	array('label'=>'Create Teamneed', 'url'=>array('create')),
	array('label'=>'View Teamneed', 'url'=>array('view', 'id'=>$model->n_id)),
	array('label'=>'Manage Teamneed', 'url'=>array('admin')),
);
?>

<h1>Update Teamneed <?php echo $model->n_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>