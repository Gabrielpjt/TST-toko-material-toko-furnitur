<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AuthLogins extends Migration
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
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'collation' => 'utf8_general_ci',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true,
                'collation' => 'utf8_general_ci',
            ],
            'password_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'collation' => 'utf8_general_ci',
            ],
            'reset_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'collation' => 'utf8_general_ci',
            ],
            'reset_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'reset_expires' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'activate_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'collation' => 'utf8_general_ci',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'collation' => 'utf8_general_ci',
            ],
            'status_message' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'collation' => 'utf8_general_ci',
            ],
            'active' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'force_pass_reset' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('email');
        $this->forge->addKey('username');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
