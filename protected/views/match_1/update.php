<?php
/* @var $this Match_1Controller */
/* @var $model Match_1 */

$this->breadcrumbs=array(
	'Match 1s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Match_1', 'url'=>array('index')),
	array('label'=>'Create Match_1', 'url'=>array('create')),
	array('label'=>'View Match_1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Match_1', 'url'=>array('admin')),
);
?>

<h1>Update Match_1 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>