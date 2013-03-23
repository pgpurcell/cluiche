<?php
/* @var $this MatchController */
/* @var $model Match */

$this->breadcrumbs=array(
	'Matches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Match', 'url'=>array('index')),
	array('label'=>'Create Match', 'url'=>array('create')),
	array('label'=>'Update Match', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Match', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Match', 'url'=>array('admin')),
);
?>

<h1>View Match #<?php echo $model->id; ?></h1>

	<?php
	// PPurcell - 19/03/2013
	// Only set if the related model exists
	// TODO: Make a function of this
	$referee_name = '';
	$referee_county = '';	
	if (isset($model->referee))
	{
		$referee_name = $model->referee->name;
		$referee_county = $model->referee->county;
	}

	$venue_name = '';
	$venue_address = '';	
	if (isset($model->venue))
	{
		$venue_name = $model->venue->name;
		$venue_address = $model->venue->address;
	}

	$team1_name = '';
	if (isset($model->team1))
	{
		$team1_name = $model->team1->name;
	}

	$team2_name = '';
	if (isset($model->team2))
	{
		$team2_name = $model->team2->name;
	}
	?>
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
		//'team1_id',
		array('label'=>$model->getAttributeLabel('team1_id'), 'value'=>$team1_name),
		'score1',
		//'team2_id',
		array('label'=>$model->getAttributeLabel('team2_id'), 'value'=>$team2_name),
		'score2',
		//'venue_id',
		array('label'=>$model->getAttributeLabel('venue_id'), 'value'=>$venue_name),
		array('label'=>'Address', 'value'=>$venue_address),
		//'referee_id',
		array('label'=>$model->getAttributeLabel('referee_id'), 'value'=>$referee_name),
		array('label'=>'Ref County', 'value'=>$referee_county),
		//array('label'=>$model->referee->getAttributeLabel('county'), 'value'=>$referee_county),
	),
)); ?>
