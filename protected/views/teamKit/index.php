<?php
/* @var $this TeamKitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Team Kits',
);

$this->menu=array(
	array('label'=>'Create TeamKit', 'url'=>array('create')),
	array('label'=>'Manage TeamKit', 'url'=>array('admin')),
);
?>

<h1>Team Kits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
