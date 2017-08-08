<?php
/* @var $this CandidateController */
/* @var $model Candidate */

$this->breadcrumbs=array(
	'Candidates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Candidate', 'url'=>array('index')),
	array('label'=>'Manage Candidate', 'url'=>array('admin')),
);
?>

<h1>Create Candidate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>