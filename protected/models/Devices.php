<?php

/**
 * This is the model class for table "devices".
 *
 * The followings are the available columns in table 'devices':
 * @property integer $id
 * @property integer $device_type_id
 * @property integer $device_brand_id
 * @property integer $device_model_id
 * @property integer $device_owner
 * @property string $device_code
 * @property string $device_created_date
 * @property string $device_buy_date
 * @property string $device_warranty_expire
 */
class Devices extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'devices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('device_type_id, device_brand_id, device_model_id, device_owner, device_code, device_created_date', 'required'),
			array('device_type_id, device_brand_id, device_model_id', 'numerical', 'integerOnly'=>true),
			array('device_code', 'length', 'max'=>45),
			array('device_buy_date, device_warranty_expire', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, device_type_id, device_brand_id, device_model_id, device_owner, device_code, device_created_date, device_buy_date, device_warranty_expire', 'safe', 'on'=>'search'),
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
			"device_types"	=> array(self::BELONGS_TO, "DeviceTypes", "device_type_id"),
			"device_brands"	=> array(self::BELONGS_TO, "DeviceBrands", "device_brand_id"),
			"device_models"	=> array(self::BELONGS_TO, "DeviceModels", "device_model_id"),
			'users'		=> array(self::BELONGS_TO, 'User', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'device_type_id' => 'Device type',
			'device_brand_id' => 'Device brand',
			'device_model_id' => 'Device model',
			'device_owner' => 'Device owner',
			'device_code' => 'Device code',
			'device_created_date' => 'Device created',
			'device_buy_date' => 'Device buy date',
			'device_warranty_expire' => 'Device warrany expire',
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
		$criteria->compare('device_type_id',$this->device_type_id);
		$criteria->compare('device_brand_id',$this->device_brand_id);
		$criteria->compare('device_model_id',$this->device_model_id);
		$criteria->compare('device_owner',$this->device_owner);
		$criteria->compare('device_code',$this->device_code,true);
		$criteria->compare('device_created_date',$this->device_created_date,true);
		$criteria->compare('device_buy_date',$this->device_buy_date,true);
		$criteria->compare('device_warranty_expire',$this->device_warranty_expire,true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Devices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
