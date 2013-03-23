<?php

/**
 * This is the model class for table "referees".
 *
 * The followings are the available columns in table 'referees':
 * @property integer $id
 * @property string $name
 * @property string $first_name
 * @property string $last_name
 * @property string $county
 * @property string $from
 * @property string $to
 */
class Referee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Referee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'referees';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>32),
			array('first_name, last_name, county', 'length', 'max'=>16),
			array('from, to', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, first_name, last_name, county, from, to', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'matches'=>array(self::HAS_MANY, 'Match', 'referee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'county' => 'County',
			'from' => 'From',
			'to' => 'To',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('to',$this->to,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Auto Complete method for referees
	 * @author Patrick Purcell
	 * @param string $name
	 * @return array records containing autocomplete filter
	 */
	public static function refereesAutoComplete($name='')
	{
		// Recommended: Secure Way to Write SQL in Yii 
		//$sql= 'SELECT id ,title AS label FROM users WHERE title LIKE :name';
		$sql= 'SELECT id, name as value FROM referees WHERE name LIKE :name';
		$name = $name.'%';
		return Yii::app()->db->createCommand($sql)->queryAll(true,array(':name'=>$name));
	}
}