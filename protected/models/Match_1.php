<?php

/**
 * This is the model class for table "matches".
 *
 * The followings are the available columns in table 'matches':
 * @property integer $id
 * @property string $season
 * @property string $date_time
 * @property string $code
 * @property string $grade
 * @property string $type
 * @property integer $competition_id
 * @property string $alt_comp_name
 * @property string $section
 * @property string $stage
 * @property integer $team1_id
 * @property integer $teamkit1_id
 * @property string $score1
 * @property integer $team2_id
 * @property integer $teamkit2_id
 * @property string $score2
 * @property integer $venue_id
 * @property integer $referee_id
 * @property integer $attendance
 * @property string $notes
 */
class Match_1 extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Match_1 the static model class
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
		return 'matches';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('competition_id, team1_id, teamkit1_id, team2_id, teamkit2_id, venue_id, referee_id, attendance', 'numerical', 'integerOnly'=>true),
			array('season, code, grade, type', 'length', 'max'=>16),
			array('alt_comp_name', 'length', 'max'=>64),
			array('section, stage', 'length', 'max'=>32),
			array('score1, score2', 'length', 'max'=>8),
			array('date_time, notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, season, date_time, code, grade, type, competition_id, alt_comp_name, section, stage, team1_id, teamkit1_id, score1, team2_id, teamkit2_id, score2, venue_id, referee_id, attendance, notes', 'safe', 'on'=>'search'),
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
			'season' => 'Season',
			'date_time' => 'Date Time',
			'code' => 'Code',
			'grade' => 'Grade',
			'type' => 'Type',
			'competition_id' => 'Competition',
			'alt_comp_name' => 'Alt Comp Name',
			'section' => 'Section',
			'stage' => 'Stage',
			'team1_id' => 'Team1',
			'teamkit1_id' => 'Teamkit1',
			'score1' => 'Score1',
			'team2_id' => 'Team2',
			'teamkit2_id' => 'Teamkit2',
			'score2' => 'Score2',
			'venue_id' => 'Venue',
			'referee_id' => 'Referee',
			'attendance' => 'Attendance',
			'notes' => 'Notes',
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
		$criteria->compare('season',$this->season,true);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('competition_id',$this->competition_id);
		$criteria->compare('alt_comp_name',$this->alt_comp_name,true);
		$criteria->compare('section',$this->section,true);
		$criteria->compare('stage',$this->stage,true);
		$criteria->compare('team1_id',$this->team1_id);
		$criteria->compare('teamkit1_id',$this->teamkit1_id);
		$criteria->compare('score1',$this->score1,true);
		$criteria->compare('team2_id',$this->team2_id);
		$criteria->compare('teamkit2_id',$this->teamkit2_id);
		$criteria->compare('score2',$this->score2,true);
		$criteria->compare('venue_id',$this->venue_id);
		$criteria->compare('referee_id',$this->referee_id);
		$criteria->compare('attendance',$this->attendance);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}