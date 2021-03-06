<?php
/* @var $this MatchController */
/* @var $data Match */
?>

<?php
// PPurcell - 21/04/2013
// For the short codes
require('protected/views/match/dropdownlists.php');

require_once('protected/views/ViewUtils.php');
?>

<?php
if ($index == 0 && 1==2)
{
?>
<tr>
	<th>
		<?php echo CHtml::encode($data->getAttributeLabel('season')); ?>
	</th>
	<th>
		<?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>
	</th>
	<th>
		<?php echo CHtml::encode($data->getAttributeLabel('code')); ?>
	</th>
	<th>
		<?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>
	</th>
	<th>
		<?php echo CHtml::encode($data->getAttributeLabel('type')); ?>
	</th>
	<th>
		<?php echo CHtml::encode($data->getAttributeLabel('competition_id')); ?>
	</th>
	<th>
		<?php echo CHtml::encode($data->getAttributeLabel('section')); ?>
	</th>
	<th>
		<?php echo CHtml::encode($data->getAttributeLabel('stage')); ?>
	</th>
</tr>
<?php
}
?>

<tr>
	<td>
		<?php
		$data_str = $type_shortcodes[$data->type].' '
			.$grade_shortcodes[$data->grade]
			.$code_shortcodes[$data->code];
		echo CHtml::link(CHtml::encode($data_str), array('view', 'id'=>$data->id));
		?>
	</td>
	<td>
		<?php echo CHtml::encode(ViewUtils::parseDbDateTime($data->date_time)); ?>
	</td>
	<td>
		<?php
		$team1_name = (isset($data->team1))?$data->team1->name:'';
		echo CHtml::encode($team1_name);
		?>
	</td>
	<td>
		<?php echo CHtml::encode($data->score1); ?>
	</td>
	<td>
		<?php echo CHtml::encode($data->score2); ?>
	</td>
	<td>
		<?php
		$team2_name = (isset($data->team2))?$data->team2->name:'';
		echo CHtml::encode($team2_name);
		?>
	</td>
	<td>
		<?php
		$venue_name = (isset($data->venue))?$data->venue->name:'';
		echo CHtml::encode($venue_name);
		?>
	</td>
	<td>
		<?php
		$competition_name = (isset($data->competition))?$data->competition->name:'';
		$data_str = $data->season.' '
			.$comp_shortcodes[$competition_name].' '
			.ViewUtils::abbrev_str($data->section).' '
			.ViewUtils::abbrev_str($data->stage);
		echo CHtml::encode($data_str);
		?>
	</td>
</tr>

	
	
	
<?php
/*
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

<!--/div-->