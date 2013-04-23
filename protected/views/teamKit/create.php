<?php
/* @var $this TeamKitController */
/* @var $model TeamKit */

$this->breadcrumbs=array(
	'Team Kits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeamKit', 'url'=>array('index')),
	array('label'=>'Manage TeamKit', 'url'=>array('admin')),
);
?>

<h1>Create TeamKit</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>