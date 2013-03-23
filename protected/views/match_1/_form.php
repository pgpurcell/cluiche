<?php
/* @var $this Match_1Controller */
/* @var $model Match_1 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'match-1-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'season'); ?>
		<?php echo $form->textField($model,'season',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'season'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
		<?php echo $form->error($model,'date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'competition'); ?>
		<?php echo $form->textField($model,'competition',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'competition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alt_comp_name'); ?>
		<?php echo $form->textField($model,'alt_comp_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'alt_comp_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'section'); ?>
		<?php echo $form->textField($model,'section',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'section'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stage'); ?>
		<?php echo $form->textField($model,'stage',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'stage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team1_id'); ?>
		<?php echo $form->textField($model,'team1_id'); ?>
		<?php echo $form->error($model,'team1_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score1'); ?>
		<?php echo $form->textField($model,'score1',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'score1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team2_id'); ?>
		<?php echo $form->textField($model,'team2_id'); ?>
		<?php echo $form->error($model,'team2_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score2'); ?>
		<?php echo $form->textField($model,'score2',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'score2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'venue_id'); ?>
		<?php echo $form->textField($model,'venue_id'); ?>
		<?php echo $form->error($model,'venue_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referee_id'); ?>
		<?php echo $form->textField($model,'referee_id'); ?>
		<?php echo $form->error($model,'referee_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->