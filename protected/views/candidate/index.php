<?php
/* @var $this CandidateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Candidates',
);

$this->menu=array(
	array('label'=>'Create Candidate', 'url'=>array('create')),
	array('label'=>'Manage Candidate', 'url'=>array('admin')),
        array('label'=>'Candidates for hire ', 'url'=>array('candidatesforhire')),
);
?>

<h1>Candidates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
