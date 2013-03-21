<?php
/**
 * @copyright Copyright (c) 2013 The President and Fellows of Harvard College
 * @license Use of this source code is governed by the LICENSE file found in the root of this project.
 */

require_once("Autoincrement.php");

class m130321_201139_DecksCards extends CDbMigration
{
	public function up()
	{
		$this->createTable('DECKSCARDS', array(
			'ID' => 'pk',
			'COLLECTION_ID' => 'number',
			'TITLE' => 'string NOT NULL',
		));
			
		Autoincrement::up('DECKSCARDS', Yii::app()->db->driverName);
			
	}

	public function down()
	{
		$this->dropTable('DECKSCARDS');
		
		Autoincrement::down('DECKSCARDS', Yii::app()->db->driverName);
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