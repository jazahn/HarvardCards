<?php
/**
 * @copyright Copyright (c) 2012 The President and Fellows of Harvard College
 * @license Use of this source code is governed by the LICENSE file found in the root of this project.
 */

require_once("Autoincrement.php");

class m130321_193838_UsersCollections extends CDbMigration
{
	public function up()
	{
		$this->createTable('USERS_COLLECTIONS', array(
			'ID' => 'pk',
			'COLLECTION_ID' => 'integer NOT NULL',
			'USER_ID' => 'integer NOT NULL',
			'PERMISSION' => 'string',
		));	

		Autoincrement::up('USERS_COLLECTIONS', Yii::app()->db->driverName);
	}

	public function down()
	{
		Autoincrement::down('USERS_COLLECTIONS', Yii::app()->db->driverName);
		
		$this->dropTable('USERS_COLLECTIONS');
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
