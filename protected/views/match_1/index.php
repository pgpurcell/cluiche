<?php
/* @var $this Match_1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Match 1s',
);

$this->menu=array(
	array('label'=>'Create Match_1', 'url'=>array('create')),
	array('label'=>'Manage Match_1', 'url'=>array('admin')),
);
?>

<h1>Match 1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
