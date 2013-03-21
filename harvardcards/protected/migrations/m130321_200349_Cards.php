<?php
/**
 * @copyright Copyright (c) 2013 The President and Fellows of Harvard College
 * @license Use of this source code is governed by the LICENSE file found in the root of this project.
 */

require_once("Autoincrement.php");

class m130321_200349_Cards extends CDbMigration
{
	public function up()
	{
		$this->createTable('CARDS', array(
			'ID' => 'pk',
			'TITLE' => 'string NOT NULL',
			'TYPE' => 'string NOT NULL'
		));
			
		Autoincrement::up('CARDS', Yii::app()->db->driverName);
			
	}

	public function down()
	{
		$this->dropTable('CARDS');
		
		Autoincrement::down('CARDS', Yii::app()->db->driverName);
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