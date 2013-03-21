<?php
/**
 * @copyright Copyright (c) 2013 The President and Fellows of Harvard College
 * @license Use of this source code is governed by the LICENSE file found in the root of this project.
 */

require_once("Autoincrement.php");

class m130321_154320_create_users_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('USERS', array(
			'ID' => 'pk',
			'EXTERNAL_ID' => 'string',
			'NAME' => 'string',
			'FNAME' => 'string',
			'LNAME' => 'string',
			'EMAIL' => 'string',
		));	

		Autoincrement::up('USERS', Yii::app()->db->driverName);
		
	}

	public function down()
	{
		Autoincrement::down('USERS', Yii::app()->db->driverName);
		
		$this->dropTable('USERS');
		
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