<?php
/* @var $this Match_1Controller */
/* @var $model Match_1 */

$this->breadcrumbs=array(
	'Match 1s'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Match_1', 'url'=>array('index')),
	array('label'=>'Create Match_1', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#match-1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Match 1s</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'match-1-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'season',
		'date_time',
		'code',
		'grade',
		'type',
		/*
		'competition',
		'alt_comp_name',
		'section',
		'stage',
		'team1_id',
		'score1',
		'team2_id',
		'score2',
		'venue_id',
		'referee_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
