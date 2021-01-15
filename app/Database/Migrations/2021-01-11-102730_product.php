<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'product_id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'auto_increment' => TRUE
			],
			'product_name'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'product_cat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
			'product_price'       => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
			'product_description' => [
					'type'           => 'TEXT',
					'null'           => TRUE,
			],
			'product_img'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'product_adv'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			]
		]);
		$this->forge->addKey('product_id', TRUE);
		$this->forge->createTable('product');
	} 

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
