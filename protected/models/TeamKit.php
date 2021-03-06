<?php

/**
 * This is the model class for table "team_kits".
 *
 * The followings are the available columns in table 'team_kits':
 * @property integer $id
 * @property string $image
 * @property integer $team_id
 * @property string $date_from
 * @property string $date_to
 * TODO: Add a field something like probability to denote how certain this kit is correct
 * e.g. certain/definite, quite sure, unsure, guess
 */
class TeamKit extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TeamKit the static model class
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
		return 'team_kits';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team_id', 'numerical', 'integerOnly'=>true),
			array('image', 'length', 'max'=>64),
			array('image', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('date_from, date_to', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, image, team_id, date_from, date_to', 'safe', 'on'=>'search'),
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
			'team'=>array(self::BELONGS_TO, 'Team', 'team_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'image' => 'Image',
			'team_id' => 'Team',
			'date_from' => 'Date From',
			'date_to' => 'Date To',
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
		$criteria->compare('image',$this->image,true);
		$criteria->compare('team_id',$this->team_id);
		$criteria->compare('date_from',$this->date_from,true);
		$criteria->compare('date_to',$this->date_to,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Auto Complete method for teams
	 * @author Patrick Purcell
	 * @param string $name
	 * @return array records containing autocomplete filter
	 */
	public static function teamKitsAutoComplete($name='')
	{
		// Recommended: Secure Way to Write SQL in Yii 
		// TODO: add a field that makes this easier to use e.g. kit name and date etc.
		$sql= "SELECT id, id as value FROM team_kits WHERE id = :name";
		//$name = $name.'%';
		return Yii::app()->db->createCommand($sql)->queryAll(true,array(':name'=>$name));
	}
}