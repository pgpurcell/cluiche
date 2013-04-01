<?php
/* @var $this CompetitionSeasonController */
/* @var $model CompetitionSeason */

$this->breadcrumbs=array(
	'Competition Seasons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetitionSeason', 'url'=>array('index')),
	array('label'=>'Manage CompetitionSeason', 'url'=>array('admin')),
);
?>

<h1>Create CompetitionSeason</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>