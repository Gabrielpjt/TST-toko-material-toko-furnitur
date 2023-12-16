<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AuthActivationAttempts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'ip_address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'collation' => 'utf8_general_ci',
            ],
            'user_agent' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'collation' => 'utf8_general_ci',
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
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
