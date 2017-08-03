<?php
/* @var $this PetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pets',
);

$this->menu=array(
	array('label'=>'Create Pet', 'url'=>array('create')),
	array('label'=>'Manage Pet', 'url'=>array('admin')),
        array('label'=>'White Pets', 'url'=>array('white')),
        array('label'=>'White & fluffy Pets', 'url'=>array('whitefluffy')),
        array('label'=>'More than average price', 'url'=>array('morethanaverprice')),
        array('label'=>'Most expensive', 'url'=>array('mostexpensive')),
);
?>

<h1>Pets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
