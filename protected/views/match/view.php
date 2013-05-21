<?php
/* @var $this MatchController */
/* @var $model Match */

// TODO: Add notes field to Competition Seasons module
// TODO: Find somewhere to put alt_comp_name
// TODO: Team Kits under score fields

$this->menu=array(
	array('label'=>'List Match', 'url'=>array('index')),
	array('label'=>'Create Match', 'url'=>array('create')),
	array('label'=>'Update Match', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Match', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Match', 'url'=>array('admin')),
);

$competition_name = (isset($model->competition))?$model->competition->name:'';
$team1_name = (isset($model->team1))?$model->team1->name:'';
$team2_name = (isset($model->team2))?$model->team2->name:'';

$venue_name = '';
$venue_address = '';
if (isset($model->venue))
{
	$venue_name = $model->venue->name;
	$venue_address = $model->venue->address;	
}
?>

<span class="minor_text"><?php echo $model->type ?></span>
<h2 class="underline_title"><?php echo $model->season.' '.$competition_name.' '.$model->stage.' - '.$model->grade.' '.$model->code; ?></h2>
<?php if (!empty($model->section)) { ?><h4><?php echo $model->section ?></h4><?php } ?>
<table>
	<tr>
		<td><?php echo date_format(new DateTime($model->date_time), 'd/m/Y H:m') ?></td>
		<td class="cell_right"><?php echo $team1_name ?></td>
		<td class="cell_left"><?php echo $model->score1 ?></td>
		<td class="cell_right"><?php echo $model->score2 ?></td>
		<td class="cell_left"><?php echo $team2_name ?></td>
		<td><?php echo $venue_name; echo (!empty($venue_address))?',<br>'.$venue_address:''; ?></td>
	</tr>
</table>







<?php
/*
	<?php
	// PPurcell - 19/03/2013
	// Only set if the related model exists
	$referee_name = (isset($model->referee))?$model->referee->name:'';
	$referee_county = (isset($model->referee))?$model->referee->county:'';
	$venue_name = (isset($model->venue))?$model->venue->name:'';
	$venue_address = (isset($model->address))?$model->venue->address:'';
	$team1_name = (isset($model->team1))?$model->team1->name:'';
	$team2_name = (isset($model->team2))?$model->team2->name:'';
	$competition_name = (isset($model->competition))?$model->competition->name:'';
	?>
	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'label'=>$model->getAttributeLabel('season'),
			'value'=>$model->season,
			'itemTemplate'=>'<tr class="{class}"><th>{label}:{value}</th>',
		),
		array(
			'label'=>$model->getAttributeLabel('date_time'),
			'value'=>$model->date_time,
			'itemTemplate'=>'<td>{label}:{value}</td></tr>\n',
		),
		'date_time',
		'code',
		'grade',
		'type',
		//'competition_id',
		array('label'=>$model->getAttributeLabel('competition_id'), 'value'=>$competition_name),
		'alt_comp_name',
		'section',
		'stage',
		//'team1_id',
		array('label'=>$model->getAttributeLabel('team1_id'), 'value'=>$team1_name),
		'score1',
		//'team2_id',
		array('label'=>$model->getAttributeLabel('team2_id'), 'value'=>$team2_name),
		'score2',
		array(
			'name'=>'teamkit1_id',
			'type'=>'html',
			'value'=>(!empty($model->teamkit1_id))?CHtml::image(Yii::app()->assetManager->publish(Yii::app()->basePath.'/../images/teamkits/'.$model->teamkit1_id),"",""):"no image",
		),
		array(
			'name'=>'teamkit2_id',
			'type'=>'html',
			'value'=>(!empty($model->teamkit2_id))?CHtml::image(Yii::app()->assetManager->publish(Yii::app()->basePath.'/../images/teamkits/'.$model->teamkit2_id),"",""):"no image",
		),
		//'venue_id',
		array('label'=>$model->getAttributeLabel('venue_id'), 'value'=>$venue_name),
		array('label'=>'Address', 'value'=>$venue_address),
		//'referee_id',
		array('label'=>$model->getAttributeLabel('referee_id'), 'value'=>$referee_name),
		array('label'=>'Ref County', 'value'=>$referee_county),
		'attendance',
		'notes',
	),
));*/ ?>
