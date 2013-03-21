<?php
/**
 * @copyright Copyright (c) 2013 The President and Fellows of Harvard College
 * @license Use of this source code is governed by the LICENSE file found in the root of this project.
 */

require_once("Autoincrement.php");

class m130321_153547_Collections extends CDbMigration
{
	public function up()
	{
		$this->createTable('COLLECTIONS', array(
			'ID' => 'pk',
			'TITLE' => 'string NOT NULL',
			'DESCRIPTION' => 'text'
		));
			
		Autoincrement::up('COLLECTIONS', Yii::app()->db->driverName);
			
	}

	public function down()
	{
		$this->dropTable('COLLECTIONS');
		
		Autoincrement::down('COLLECTIONS', Yii::app()->db->driverName);
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