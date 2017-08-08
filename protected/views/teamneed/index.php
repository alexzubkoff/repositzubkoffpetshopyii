<?php
/* @var $this TeamneedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teamneeds',
);

$this->menu=array(
	array('label'=>'Create Teamneed', 'url'=>array('create')),
	array('label'=>'Manage Teamneed', 'url'=>array('admin')),
);
?>

<h1>Teamneeds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
