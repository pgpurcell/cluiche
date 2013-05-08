<?php
/* @var $this MatchController */
/* @var $model Match */
/* @var $form CActiveForm */
?>

<?php
// PPurcell - 16/03/2013
// Add some dropdown arrays
require('protected/views/match/dropdownlists.php');

// For the relate fields
require_once('protected/views/ViewUtils.php');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'match-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="left">
			<div class="name">
				<?php echo $form->labelEx($model,'season'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'season',array('size'=>16,'maxlength'=>16)); ?>
				<?php echo $form->error($model,'season'); ?>
			</div>
		</div>
		<div class="right">
			<div class="name">
				<?php echo $form->labelEx($model,'date_time'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'date_time'); ?>
				<?php echo $form->error($model,'date_time'); ?>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row">
		<div class="left">
			<div class="name">
				<?php echo $form->labelEx($model,'code'); ?>
			</div>
			<div class="value">
				<?php //echo $form->textField($model,'code',array('size'=>16,'maxlength'=>16)); ?>
				<?php echo $form->dropDownList($model, 'code', $codes_list);?>
				<?php echo $form->error($model,'code'); ?>
			</div>
		</div>
		<div class="right">
			<div class="name">
				<?php echo $form->labelEx($model,'grade'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'grade',array('size'=>16,'maxlength'=>16)); ?>
				<?php echo $form->error($model,'grade'); ?>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row">
		<div class="left">
			<div class="name">
				<?php echo $form->labelEx($model,'type'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'type',array('size'=>16,'maxlength'=>16)); ?>
				<?php echo $form->error($model,'type'); ?>
			</div>
		</div>
		<div class="right">
			<?php ViewUtils::displayRelateEdit('competition_id', $model, 'competition', 'match', $form, $this); ?>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row">
		<div class="left">
			<div class="name">
				<?php echo $form->labelEx($model,'alt_comp_name'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'alt_comp_name',array('size'=>25,'maxlength'=>64)); ?>
				<?php echo $form->error($model,'alt_comp_name'); ?>
			</div>
		</div>
		<div class="right">
			<div class="name">
				<?php echo $form->labelEx($model,'section'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'section',array('size'=>25,'maxlength'=>32)); ?>
				<?php echo $form->error($model,'section'); ?>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row">
		<div class="left">
			<div class="name">
				<?php echo $form->labelEx($model,'stage'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'stage',array('size'=>25,'maxlength'=>32)); ?>
				<?php echo $form->error($model,'stage'); ?>
			</div>
		</div>
		<div class="right">
			&nbsp;
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row">
		<div class="left">
			<?php ViewUtils::displayRelateEdit('team1_id', $model, 'team1', 'match', $form, $this); ?>
		</div>
		<div class="right">
			<div class="name">
				<?php echo $form->labelEx($model,'score1'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'score1',array('size'=>8,'maxlength'=>8)); ?>
				<?php echo $form->error($model,'score1'); ?>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row">
		<div class="left">
			<?php ViewUtils::displayRelateEdit('team2_id', $model, 'team2', 'match', $form, $this); ?>
		</div>
		<div class="right">
			<div class="name">
				<?php echo $form->labelEx($model,'score2'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'score2',array('size'=>8,'maxlength'=>8)); ?>
				<?php echo $form->error($model,'score2'); ?>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row">
		<div class="left">
			<?php
			ViewUtils::displayRelateEdit('teamkit1_id', $model, 'teamKit1', 'match', $form, $this, 'id');
			?>
		</div>
		<div class="right">
			<?php
			ViewUtils::displayRelateEdit('teamkit2_id', $model, 'teamKit2', 'match', $form, $this, 'id');
			?>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row">
		<div class="left">
			<?php ViewUtils::displayRelateEdit('venue_id', $model, 'venue', 'match', $form, $this); ?>
		</div>
		<div class="right">
			<?php ViewUtils::displayRelateEdit('referee_id', $model, 'referee', 'match', $form, $this); ?>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row">
		<div class="left">
			<div class="name">
				<?php echo $form->labelEx($model,'attendance'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'attendance'); ?>
				<?php echo $form->error($model,'attendance'); ?>
			</div>
		</div>
		<div class="right">
			<div class="name">
				<?php echo $form->labelEx($model,'notes'); ?>
			</div>
			<div class="value">
				<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'notes'); ?>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->