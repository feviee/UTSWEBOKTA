<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbpost extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
			],
			'userid'       => [
					'type'       => 'INT',
					'constraint'     => 5,
			],
			'title' => [
					'type' => 'TEXT',
					'null' => true,
			],
			'body' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'gambar' => [
					'type' => 'TEXT',
					'null' => true,
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->createTable('tablepost');
	}

	public function down()
	{
		$this->forge->dropTable('tablepost');
	}
}
