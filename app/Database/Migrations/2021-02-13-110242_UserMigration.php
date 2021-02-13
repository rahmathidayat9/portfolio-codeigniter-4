<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=>	[
				'type'				=>	'INT',
				'constrait'			=>	11,
				'unsigned' 			=> 	true,
				'auto_increment' 	=> 	true,
			],
			'name'	=>	[
				'type'				=>	'VARCHAR',
				'constrait'			=>	'100',
				'null'				=>	true,
			],
			'username'	=>	[
				'type'				=>	'VARCHAR',
				'constrait'			=>	'100',
				'null'				=>	true,
			],
			'email'	=>	[
				'type'				=>	'VARCHAR',
				'constrait'			=>	'100',
				'null'				=>	true,
			],
			'password'	=>	[
				'type'				=>	'VARCHAR',
				'constrait'			=>	'255',
				'null'				=>	true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
