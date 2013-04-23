<?php
/* @var $this TeamKitController */
/* @var $model TeamKit */

$this->breadcrumbs=array(
	'Team Kits'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TeamKit', 'url'=>array('index')),
	array('label'=>'Create TeamKit', 'url'=>array('create')),
	array('label'=>'Update TeamKit', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TeamKit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeamKit', 'url'=>array('admin')),
);
?>

<h1>View TeamKit #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image',
		'team_id',
		'date_from',
		'date_to',
	),
)); ?>
