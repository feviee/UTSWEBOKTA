<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbkomentar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
			],
			'postid'       => [
					'type'       => 'INT',
					'constraint'     => 5,
			],
			'name' => [
					'type' => 'TEXT',
					'null' => true,
			],
			'email' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'body' => [
					'type' => 'TEXT',
					'null' => true,
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->createTable('tablekomen');
	}

	public function down()
	{
		$this->forge->dropTable('tablekomen');
	}
}
