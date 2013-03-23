<?php
/* @var $this Match_1Controller */
/* @var $model Match_1 */

$this->breadcrumbs=array(
	'Match 1s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Match_1', 'url'=>array('index')),
	array('label'=>'Create Match_1', 'url'=>array('create')),
	array('label'=>'Update Match_1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Match_1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Match_1', 'url'=>array('admin')),
);
?>

<h1>View Match_1 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'season',
		'date_time',
		'code',
		'grade',
		'type',
		'competition',
		'alt_comp_name',
		'section',
		'stage',
		'team1_id',
		'score1',
		'team2_id',
		'score2',
		'venue_id',
		'referee_id',
	),
)); ?>
