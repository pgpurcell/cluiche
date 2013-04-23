<?php
/* @var $this TeamKitController */
/* @var $model TeamKit */

$this->breadcrumbs=array(
	'Team Kits'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TeamKit', 'url'=>array('index')),
	array('label'=>'Create TeamKit', 'url'=>array('create')),
	array('label'=>'View TeamKit', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TeamKit', 'url'=>array('admin')),
);
?>

<h1>Update TeamKit <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>