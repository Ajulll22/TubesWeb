<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'admin_id' => [
                'type'  => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'admin_name' => [
                'type'  => 'VARCHAR',
				'constraint' => 50,
				'null' => true
			],
            'admin_email' => [
                'type'  => 'VARCHAR',
				'constraint' => 50,
				'null' => true
            ],			
            'admin_password' => [
                'type'  => 'VARCHAR',
				'constraint' => 50,
				'null' => true
            ]
        ]);
        $this->forge->addKey('admin_id');
        $this->forge->createTable('admin');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
