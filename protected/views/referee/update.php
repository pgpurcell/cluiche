<?php
/* @var $this RefereeController */
/* @var $model Referee */

$this->breadcrumbs=array(
	'Referees'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Referee', 'url'=>array('index')),
	array('label'=>'Create Referee', 'url'=>array('create')),
	array('label'=>'View Referee', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Referee', 'url'=>array('admin')),
);
?>

<h1>Update Referee <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>