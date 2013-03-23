<?php
/* @var $this Match_1Controller */
/* @var $model Match_1 */

$this->breadcrumbs=array(
	'Match 1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Match_1', 'url'=>array('index')),
	array('label'=>'Manage Match_1', 'url'=>array('admin')),
);
?>

<h1>Create Match_1</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>