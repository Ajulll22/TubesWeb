<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'auto_increment' => TRUE
			],
			'user_name'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
					'null'           => TRUE
			],
			'user_email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => TRUE
			],
			'user_password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => TRUE
			],
			'user_created_at' => [
					'type'           => 'TIMESTAMP',
			]
		]);
		$this->forge->addKey('user_id', TRUE);
		$this->forge->createTable('users');
		//
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
