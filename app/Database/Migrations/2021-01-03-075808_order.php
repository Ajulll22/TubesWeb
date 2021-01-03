<?php namespace App\Database\Migrations;
 
use CodeIgniter\Database\Migration;
 
class order extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'  => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'address' => [
                'type'  => 'TEXT',
                'constraint' => 50
			],
			'detail' => [
                'type'  => 'TEXT',
                'constraint' => 1000
            ],
            'total' => [
                'type'  => 'INT',
                'constraint' => 11
            ],			
            'shipp' => [
                'type'  => 'INT',
                'constraint' => 11
            ],
            'payment' => [
                'type'  => 'TEXT'
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('products');
    }
 
    public function down()
    {
        //
    }
}