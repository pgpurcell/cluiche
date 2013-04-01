<?php

/**
 * This is the model class for table "competitions_seasons".
 *
 * The followings are the available columns in table 'competitions_seasons':
 * @property integer $id
 * @property integer $competition_id
 * @property string $season
 * @property integer $winner_id
 */
class CompetitionSeason extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CompetitionSeason the static model class
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
		return 'competitions_seasons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('competition_id, season, winner_id', 'required'),
			array('competition_id, winner_id', 'numerical', 'integerOnly'=>true),
			array('season', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, competition_id, season, winner_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'competition_id' => 'Competition',
			'season' => 'Season',
			'winner_id' => 'Winner',
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
		$criteria->compare('competition_id',$this->competition_id);
		$criteria->compare('season',$this->season,true);
		$criteria->compare('winner_id',$this->winner_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}