<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'user_id' => [
                'type'  => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'user_name' => [
                'type'  => 'VARCHAR',
				'constraint' => 50,
				'null' => true
			],
            'user_email' => [
                'type'  => 'VARCHAR',
				'constraint' => 50,
				'null' => true
            ],			
            'user_password' => [
                'type'  => 'VARCHAR',
				'constraint' => 50,
				'null' => true
            ],
            'user_created_at' => [
                'type'  => 'TIMESTAMP'
            ]
        ]);
        $this->forge->addKey('user_id');
        $this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
