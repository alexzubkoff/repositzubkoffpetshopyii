<?php
/* @var $this TeamneedController */
/* @var $data Teamneed */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->n_id), array('view', 'id'=>$data->n_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_id')); ?>:</b>
	<?php echo CHtml::encode($data->team_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experience')); ?>:</b>
	<?php echo CHtml::encode($data->experience); ?>
	<br />


</div>