<?php

/**
 * This is the model class for table "teams".
 *
 * The followings are the available columns in table 'teams':
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property string $code
 * @property string $grade
 * @property string $short_code
 * @property string $abbrev
 */
class Team extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Team the static model class
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
		return 'teams';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type', 'length', 'max'=>32),
			array('code, grade', 'length', 'max'=>16),
			array('short_code, abbrev', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, type, code, grade, short_code, abbrev', 'safe', 'on'=>'search'),
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
			'matches'=>array(self::HAS_MANY, 'Match', 'team1_id'),
			'matches'=>array(self::HAS_MANY, 'Match', 'team2_id'),
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
			'type' => 'Type',
			'code' => 'Code',
			'grade' => 'Grade',
			'short_code' => 'Short Code',
			'abbrev' => 'Abbrev',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('short_code',$this->short_code,true);
		$criteria->compare('abbrev',$this->abbrev,true);

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
	public static function teamsAutoComplete($name='')
	{
		// Recommended: Secure Way to Write SQL in Yii 
		$sql= "SELECT id, CONCAT(name,' (',short_code,')') as value FROM teams WHERE name LIKE :name";
		$name = $name.'%';
		return Yii::app()->db->createCommand($sql)->queryAll(true,array(':name'=>$name));
	}
}