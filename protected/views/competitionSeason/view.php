<?php
/* @var $this CompetitionSeasonController */
/* @var $model CompetitionSeason */

$this->breadcrumbs=array(
	'Competition Seasons'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CompetitionSeason', 'url'=>array('index')),
	array('label'=>'Create CompetitionSeason', 'url'=>array('create')),
	array('label'=>'Update CompetitionSeason', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CompetitionSeason', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetitionSeason', 'url'=>array('admin')),
);
?>

<h1>View CompetitionSeason #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'competition_id',
		'season',
		'winner_id',
		'notes'
	),
)); ?>
