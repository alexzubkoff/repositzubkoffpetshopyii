<?php
/* @var $this CandidateController */
/* @var $model Candidate */

$this->breadcrumbs=array(
	'Candidates'=>array('index'),
	$model->name=>array('view','id'=>$model->c_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Candidate', 'url'=>array('index')),
	array('label'=>'Create Candidate', 'url'=>array('create')),
	array('label'=>'View Candidate', 'url'=>array('view', 'id'=>$model->c_id)),
	array('label'=>'Manage Candidate', 'url'=>array('admin')),
);
?>

<h1>Update Candidate <?php echo $model->c_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>