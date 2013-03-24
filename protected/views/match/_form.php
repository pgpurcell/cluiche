<?php
/* @var $this MatchController */
/* @var $model Match */
/* @var $form CActiveForm */
?>

<?php
// PPurcell - 16/03/2013
// Add some dropdown arrays
require_once('protected/views/match/dropdownlists.php');
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
			<div class="name">
				<?php echo $form->labelEx($model,'competition'); ?>
			</div>
			<div class="value">
				<?php echo $form->textField($model,'competition',array('size'=>25,'maxlength'=>64)); ?>
				<?php echo $form->error($model,'competition'); ?>
			</div>
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
			<div class="name">
				<?php echo $form->labelEx($model,'team1_id'); ?>
			</div>
			<div class="value">
				<?php echo $form->hiddenField($model,'team1_id',array()); ?>
				<?php
				// TODO: Make this into a method as it's fairly common
				$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
					'name'=>'team1',
					'value'=>(isset($model->team1))?$model->team1->name:'',
					'source'=>$this->createUrl('match/autocompleteTeam1'),
					// additional javascript options for the autocomplete plugin
					'options'=>array(
							'showAnim'=>'fold',
							'select'=>
								"js:function(event, ui) {
									$('#Match_team1_id').val(ui.item.id);
								}"
					),
				));
				?>
				<?php echo $form->error($model,'team1_id'); ?>
			</div>
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
			<div class="name">
				<?php echo $form->labelEx($model,'team2_id'); ?>
			</div>
			<div class="value">
				<?php echo $form->hiddenField($model,'team2_id',array()); ?>
				<?php
				// TODO: Make this into a method as it's fairly common
				$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
					'name'=>'team2',
					'value'=>(isset($model->team2))?$model->team2->name:'',
					'source'=>$this->createUrl('match/autocompleteTeam2'),
					// additional javascript options for the autocomplete plugin
					'options'=>array(
							'showAnim'=>'fold',
							'select'=>
								"js:function(event, ui) {
									$('#Match_team2_id').val(ui.item.id);
								}"
					),
				));
				?>
				<?php echo $form->error($model,'team2_id'); ?>
			</div>
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
			<div class="name">
				<?php echo $form->labelEx($model,'venue_id'); ?>
			</div>
			<div class="value">
				<?php echo $form->hiddenField($model,'venue_id',array()); ?>
				<?php
				// TODO: Make this into a method as it's fairly common
				$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
					'name'=>'venue',
					'value'=>(isset($model->venue))?$model->venue->name:'',
					'source'=>$this->createUrl('match/autocompleteVenue'),
					// additional javascript options for the autocomplete plugin
					'options'=>array(
							'showAnim'=>'fold',
							'select'=>
								"js:function(event, ui) {
									$('#Match_venue_id').val(ui.item.id);
								}"
					),
				));
				?>
				<?php echo $form->error($model,'venue_id'); ?>
			</div>
		</div>
		<div class="right">
			<div class="name">
				<?php echo $form->labelEx($model,'referee_id'); ?>
			</div>
			<div class="value">
				<?php //echo $form->textField($model,'referee_id',array('size'=>32,'maxlength'=>32)); ?>
				<?php echo $form->hiddenField($model,'referee_id',array()); ?>
				<?php
				$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
					'name'=>'referee',
					'value'=>(isset($model->referee))?$model->referee->name:'',
					'source'=>$this->createUrl('match/autocompleteReferee'),
					// additional javascript options for the autocomplete plugin
					'options'=>array(
							'showAnim'=>'fold',
							'select'=>
								"js:function(event, ui) {
									$('#Match_referee_id').val(ui.item.id);
								}"
					),
				));
				?>
				<?php echo $form->error($model,'referee_id'); ?>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->