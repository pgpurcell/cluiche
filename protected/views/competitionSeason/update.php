<?php
/* @var $this CompetitionSeasonController */
/* @var $model CompetitionSeason */

$this->breadcrumbs=array(
	'Competition Seasons'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetitionSeason', 'url'=>array('index')),
	array('label'=>'Create CompetitionSeason', 'url'=>array('create')),
	array('label'=>'View CompetitionSeason', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CompetitionSeason', 'url'=>array('admin')),
);
?>

<h1>Update CompetitionSeason <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>