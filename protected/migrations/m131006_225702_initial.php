<?php

class m131006_225702_initial extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_user', array(
			'id' => 'SERIAL PRIMARY KEY',
			'username' => 'VARCHAR(255) DEFAULT NULL',
			'password' => 'VARCHAR(255) NOT NULL',
			'firstname' => 'VARCHAR(255) DEFAULT NULL',
			'lastname' => 'VARCHAR(255) DEFAULT NULL',
			'email' => 'VARCHAR(255) NOT NULL', 
			'role' => 'enum(\'admin\',\'editor\',\'user\') NOT NULL DEFAULT \'user\'',
		));
		$this->createIndex('user_username_unique', 'tbl_user', 'username', true); //unique index
		$this->createIndex('user_email_unique', 'tbl_user', 'email', true); //unique index

		$this->createTable('tbl_post', array(
			'id' => 'SERIAL PRIMARY KEY',
			'title' => 'VARCHAR(255) DEFAULT NULL',
			'user_id' => 'INTEGER(20) NOT NULL',
			'content' => 'TEXT DEFAULT NULL',
			'created' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'modified' => 'TIMESTAMP NULL DEFAULT NULL'
		));

		$this->createTable('tbl_tag', array(
			'id' => 'SERIAL PRIMARY KEY',
			'name' => 'VARCHAR(255) NOT NULL',
		));
		$this->createIndex('tag_name_unique', 'tbl_tag', 'name', true); //unique index
		$this->createTable('tbl_post_tag', array(
			'post_id' => 'INTEGER(20) NOT NULL',
			'tag_id' => 'INTEGER(20) NOT NULL',
		));
		$this->createIndex('post_tag_unique', 'tbl_post_tag', 'post_id,tag_id', true); //unique index
		$this->insert('tbl_user', array(
			'username'=>'admin',
			'password'=>'$2y$10$q17o1.zgWGwXeWfEESlg/uHV9/DuW8mMxNYRFI9.sSO.gV3tWMDAe', //password
			'email'=>'webmaster@example.com',
			'role'=>'admin')
		);
	}

	public function down()
	{
		$this->execute("DROP TABLE IF EXISTS tbl_post;");
		$this->execute("DROP TABLE IF EXISTS tbl_user;");
		$this->execute("DROP TABLE IF EXISTS tbl_tag;");
		$this->execute("DROP TABLE IF EXISTS tbl_post_tag;");
		return true;
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
