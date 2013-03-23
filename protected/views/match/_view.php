<?php
/* @var $this MatchController */
/* @var $data Match */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season')); ?>:</b>
	<?php echo CHtml::encode($data->season); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('competition')); ?>:</b>
	<?php echo CHtml::encode($data->competition); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alt_comp_name')); ?>:</b>
	<?php echo CHtml::encode($data->alt_comp_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('section')); ?>:</b>
	<?php echo CHtml::encode($data->section); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stage')); ?>:</b>
	<?php echo CHtml::encode($data->stage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team1_id')); ?>:</b>
	<?php echo CHtml::encode($data->team1_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score1')); ?>:</b>
	<?php echo CHtml::encode($data->score1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team2_id')); ?>:</b>
	<?php echo CHtml::encode($data->team2_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score2')); ?>:</b>
	<?php echo CHtml::encode($data->score2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('venue_id')); ?>:</b>
	<?php echo CHtml::encode($data->venue_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referee_id')); ?>:</b>
	<?php echo CHtml::encode($data->referee_id); ?>
	<br />

	*/ ?>

</div>