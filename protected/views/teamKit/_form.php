<?php
/* @var $this TeamKitController */
/* @var $model TeamKit */
/* @var $form CActiveForm */
?>

<?php
// PPurcell - 28/04/2013
// For the relate fields
require_once('protected/views/ViewUtils.php');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'team-kit-form',
	'enableAjaxValidation'=>false,
	
	// PPurcell - 03/04/2013: for image uploads
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php //echo $form->textField($model,'image',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo CHtml::activeFileField($model, 'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
	<?php
	if($model->isNewRecord!='1')
	{
	?>
	<div class="row">
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/teamkits/'.$model->image,"image",""); ?>
	</div>
	<?php
	}
	?>

	<div class="row">
		<?php ViewUtils::displayRelateEdit('team_id', $model, 'team', 'teamKit', $form, $this); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_from'); ?>
		<?php echo $form->textField($model,'date_from'); ?>
		<?php echo $form->error($model,'date_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_to'); ?>
		<?php echo $form->textField($model,'date_to'); ?>
		<?php echo $form->error($model,'date_to'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->