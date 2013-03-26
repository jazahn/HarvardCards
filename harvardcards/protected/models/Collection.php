<?php
/**
 * @copyright Copyright (c) 2013 The President and Fellows of Harvard College
 * @license Use of this source code is governed by the LICENSE file found in the root of this project.
 */


/**
 * Collection
 *
 * This is the model class for table "Collections".
 *
 * The followings are the available columns in table 'Collections':
 * integer $id
 * string $title
 * string $description
 *
 * @package app.Model
 */
class Collection extends QActiveRecord
{

	/**
	 * sequenceName
	 *
	 * this is needed by QActiveRecord for Oracle
	 * 
	 * @var string
	 */
	public $sequenceName = 'COLLECTIONS_SEQ';	
	
	/**
	 * created originally by Yii's Gii
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Collection the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * created originally by Yii's Gii
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'COLLECTIONS';
	}

	/**
	 * created originally by Yii's Gii
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TITLE', 'required'),
			array('DESCRIPTION', 'length', 'max'=>3900),
		);
	}

	/**
	 * created originally by Yii's Gii
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			//'quizzes' => array(self::HAS_MANY, 'QUIZZES', 'COLLECTION_ID'),
			//'userscollections' => array(self::HAS_MANY, 'USERSCOLLECTIONS', 'COLLECTION_ID'),
		);
	}

	/**
	 * created originally by Yii's Gii
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'TITLE' => 'Title',
			'DESCRIPTION' => 'Description',
		);
	}

	/**
	* primaryKey
	* @return integer 
	*/
	public function primaryKey(){
		return 'ID';
	}


}
