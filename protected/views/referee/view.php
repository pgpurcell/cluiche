<?php
/* @var $this RefereeController */
/* @var $model Referee */

$this->breadcrumbs=array(
	'Referees'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Referee', 'url'=>array('index')),
	array('label'=>'Create Referee', 'url'=>array('create')),
	array('label'=>'Update Referee', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Referee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Referee', 'url'=>array('admin')),
);
?>

<h1>View Referee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'first_name',
		'last_name',
		'county',
		'from',
		'to',
	),
)); ?>
