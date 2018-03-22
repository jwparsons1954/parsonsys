<?php

/**
 * This is the model class for table "Tbl_dadsForms".
 *
 * The followings are the available columns in table 'Tbl_dadsForms':
 * @property string $install_date
 * @property integer $key
 * @property string $city
 * @property string $transfer_to
 * @property string $transfer_from
 * @property string $asset_tag
 * @property string $serial
 * @property string $description
 * @property integer $tran_to_sector
 * @property string $tran_to_loc
 * @property string $installer
 */
class DadsForms extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Tbl_dadsForms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('install_date, key, city, transfer_to, transfer_from, asset_tag, serial, description, tran_to_sector, tran_to_loc, installer', 'required'),
			array('key, tran_to_sector', 'numerical', 'integerOnly'=>true),
			array('install_date, asset_tag', 'length', 'max'=>12),
			array('city', 'length', 'max'=>20),
			array('transfer_to, transfer_from, installer', 'length', 'max'=>30),
			array('serial', 'length', 'max'=>8),
			array('description', 'length', 'max'=>25),
			array('tran_to_loc', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('install_date, key, city, transfer_to, transfer_from, asset_tag, serial, description, tran_to_sector, tran_to_loc, installer', 'safe', 'on'=>'search'),
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
			'install_date' => 'Install Date',
			'key' => 'Key',
			'city' => 'City',
			'transfer_to' => 'Transfer To',
			'transfer_from' => 'Transfer From',
			'asset_tag' => 'Asset Tag',
			'serial' => 'Serial',
			'description' => 'Description',
			'tran_to_sector' => 'Tran To Sector',
			'tran_to_loc' => 'Tran To Loc',
			'installer' => 'Installer',
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

		$criteria->compare('install_date',$this->install_date,true);
		$criteria->compare('key',$this->key);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('transfer_to',$this->transfer_to,true);
		$criteria->compare('transfer_from',$this->transfer_from,true);
		$criteria->compare('asset_tag',$this->asset_tag,true);
		$criteria->compare('serial',$this->serial,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('tran_to_sector',$this->tran_to_sector);
		$criteria->compare('tran_to_loc',$this->tran_to_loc,true);
		$criteria->compare('installer',$this->installer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DadsForms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
