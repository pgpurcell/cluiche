<?php

/**
 * This is the model class for table "venues".
 *
 * The followings are the available columns in table 'venues':
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $county
 */
class Venue extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Venue the static model class
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
		return 'venues';
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
			array('address', 'length', 'max'=>64),
			array('county', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, address, county', 'safe', 'on'=>'search'),
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
			'matches'=>array(self::HAS_MANY, 'Match', 'venue_id'),
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
			'address' => 'Address',
			'county' => 'County',
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
		$criteria->compare('address',$this->address,true);
		$criteria->compare('county',$this->county,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Auto Complete method for venues
	 * @author Patrick Purcell
	 * @param string $name
	 * @return array records containing autocomplete filter
	 */
	public static function venuesAutoComplete($name='')
	{
		// Recommended: Secure Way to Write SQL in Yii 
		$sql= 'SELECT id, name as value FROM venues WHERE name LIKE :name';
		$name = $name.'%';
		return Yii::app()->db->createCommand($sql)->queryAll(true,array(':name'=>$name));
	}
}