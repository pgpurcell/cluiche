<?php

/*
 * PPurcell - 22/04/2013
 * Static class of utility functions for the views
 */

class ViewUtils
{
	/*
	 * PPurcell - 22/04/2013
	 * Displays html and php for an autocomplete relate field
	 */	
	public static function displayRelateEdit($fieldName, $model, $relName, $modelName, $form,
			$controller, $relField='name')
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
				'value'=>(isset($model->$relName))?$model->$relName->$relField:'',
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
	
	/*
	 * PPurcell - 22/04/2013
	 * Parses a db date/time to dd/mm/YYYY
	 */
	public static function parseDbDateTime($dtm_str)
	{
		// Split the string into an array of it's parts
		if (preg_match("/0000/", $dtm_str))
		{
			return '';
		}
		$date_parts = preg_split("/[\s-:]+/", $dtm_str);
		return $date_parts[2].'/'.$date_parts[1].'/'.$date_parts[0];
	}
	
	/*
	 * PPurcell - 22/04/2013
	 * Abbreviates section and stage strings
	 */
	public static function abbrev_str($str)
	{
		$str = str_replace('Division', 'Div', $str);
		$str = str_replace('Round', 'Rd.', $str);
		return $str;
	}
}
?>
