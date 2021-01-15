<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cart extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'cart_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
			],
			'product_id'          => [
				'type'           => 'INT',
				'constraint'     => 11
			],
			'user_id'          => [
				'type'           => 'INT',
				'constraint'     => 11
			],
			'barang'       => [
					'type'           => 'TEXT',
			],
			'total'       => [
				'type'           => 'INT',
				'constraint'     => 11
			],
			'jumlah'       => [
				'type'           => 'INT',
				'constraint'     => 11
			]
		]);
		$this->forge->addKey('cart_id', TRUE);
		$this->forge->addForeignKey('product_id','product','product_id');
		$this->forge->addForeignKey('cart_id','order','user_id');
		$this->forge->createTable('cart');
		//
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
