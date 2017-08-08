<?php

/**
 * This is the model class for table "tbl_specialist".
 *
 * The followings are the available columns in table 'tbl_specialist':
 * @property integer $s_id
 * @property string $name
 * @property string $salary
 * @property string $profile
 * @property string $experince
 * @property integer $team_id
 *
 * The followings are the available model relations:
 * @property Teams $team
 */
class Specialist extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_specialist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, salary, profile, experince, team_id', 'required'),
			array('team_id', 'numerical', 'integerOnly'=>true),
			array('name, salary, profile, experince', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('s_id, name, salary, profile, experince, team_id', 'safe', 'on'=>'search'),
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
			'team' => array(self::BELONGS_TO, 'Teams', 'team_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			's_id' => 'S',
			'name' => 'Name',
			'salary' => 'Salary',
			'profile' => 'Profile',
			'experince' => 'Experince',
			'team_id' => 'Team',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('s_id',$this->s_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('salary',$this->salary,true);
		$criteria->compare('profile',$this->profile,true);
		$criteria->compare('experince',$this->experince,true);
		$criteria->compare('team_id',$this->team_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Specialist the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
