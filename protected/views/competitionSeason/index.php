<?php
/* @var $this CompetitionSeasonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competition Seasons',
);

$this->menu=array(
	array('label'=>'Create CompetitionSeason', 'url'=>array('create')),
	array('label'=>'Manage CompetitionSeason', 'url'=>array('admin')),
);
?>

<h1>Competition Seasons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
