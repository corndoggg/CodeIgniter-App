<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'userid' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'lastname' => ['type' => 'VARCHAR', 'constraint' => 100],
            'firstname' => ['type' => 'VARCHAR', 'constraint' => 100],
            'middlename' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'username' => ['type' => 'VARCHAR', 'constraint' => 100],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'entrydate' => ['type' => 'DATETIME', 'null' => true],
            'lastupdatingdate' => ['type' => 'DATETIME', 'null' => true],
            'datedeleted' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('userid');
        $this->forge->addUniqueKey('username');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
