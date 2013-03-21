<?php
/**
 * @copyright Copyright (c) 2013 The President and Fellows of Harvard College
 * @license Use of this source code is governed by the LICENSE file found in the root of this project.
 */

require_once("Autoincrement.php");

class m130321_201157_FieldsCards extends CDbMigration
{
	public function up()
	{
		$this->createTable('FIELDSCARDS', array(
			'ID' => 'pk',
			'COLLECTION_ID' => 'number',
			'TITLE' => 'string NOT NULL',
		));
			
		Autoincrement::up('FIELDSCARDS', Yii::app()->db->driverName);
			
	}

	public function down()
	{
		$this->dropTable('FIELDSCARDS');
		
		Autoincrement::down('FIELDSCARDS', Yii::app()->db->driverName);
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}