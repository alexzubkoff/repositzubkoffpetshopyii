<?php
/* @var $this SpecialistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Specialists',
);

$this->menu=array(
	array('label'=>'Create Specialist', 'url'=>array('create')),
	array('label'=>'Manage Specialist', 'url'=>array('admin')),
);
?>

<h1>Specialists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
