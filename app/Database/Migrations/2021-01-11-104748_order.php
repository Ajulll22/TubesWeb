<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'order_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'auto_increment' => TRUE
			],
			'user_id'          => [
				'type'           => 'INT',
				'constraint'     => 11
			],
			'order_name'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'order_email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'barang'       => [
				'type'           => 'TEXT',
			],
			'total' => [
					'type'           => 'INT',
					'constraint'     => '25',
			],
			'kota' => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'kecamatan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat' => [
					'type'           => 'TEXT',
			],
			'telpon' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'shipping' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'pembayaran' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'status' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'order_created_at' => [
					'type'           => 'TIMESTAMP',
			]
		]);
		$this->forge->addKey('order_id', TRUE);
		$this->forge->addForeignKey('user_id','users','user_id');
		$this->forge->createTable('order');
		//
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
