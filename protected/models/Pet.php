<?php

/**
 * This is the model class for table "tbl_pet".
 *
 * The followings are the available columns in table 'tbl_pet':
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property string $color
 * @property integer $price
 * @property integer $fluffiness
 */
class Pet extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, name, color, price, fluffiness', 'required'),
			array('price, fluffiness', 'numerical', 'integerOnly'=>true),
			array('type, name, color', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, name, color, price, fluffiness', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'name' => 'Name',
			'color' => 'Color',
			'price' => 'Price',
			'fluffiness' => 'Fluffiness',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('fluffiness',$this->fluffiness);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        protected function instantiate($attributes){
        switch($attributes['type']){
            case 'Dog':
                $class='DogPet';
            break;
            case 'Cat':
                $class='CatPet';
            break;
            case 'Hamster':
                $class='HamsterPet';
            break;
            default:
                $class=get_class($this);
        }
        $model=new $class(null);
        return $model;
    }
        
}
