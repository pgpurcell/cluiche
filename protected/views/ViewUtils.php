<?php

/*
 * PPurcell - 22/04/2013
 * Static class of utility functions for the views
 */

class ViewUtils
{
	public static function displayRelateEdit($fieldName, $model, $relName, $modelName, $form, $controller)
	{
?>
		<div class="name">
			<?php echo $form->labelEx($model,$fieldName); ?>
		</div>
		<div class="value">
			<?php echo $form->hiddenField($model,$fieldName,array()); ?>
			<?php
			$controller->widget('zii.widgets.jui.CJuiAutoComplete', array(
				'name'=>$relName,
				'value'=>(isset($model->$relName))?$model->$relName->name:'',
				'source'=>$controller->createUrl($modelName.'/autocomplete'.ucfirst($relName)),
				// additional javascript options for the autocomplete plugin
				'options'=>array(
					'showAnim'=>'fold',
					'select'=>
						"js:function(event, ui) {
							$('#".ucfirst($modelName)."_".$fieldName."').val(ui.item.id);
						}"
				),
			));
			?>
			<?php echo $form->error($model,$fieldName); ?>
		</div>
<?php
	}
}
?>
