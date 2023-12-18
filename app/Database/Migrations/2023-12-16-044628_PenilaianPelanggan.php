<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PenilaianPelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_kayu'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'merek_kayu' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tekstur' => [
                'type'            => 'INT',
                'unsigned'       => true,
            ],
            'ketahanan' => [
                'type'            => 'INT',
                'unsigned'       => true,
            ],
            'keperawatan' => [
                'type'            => 'INT',
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('penilaian_pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('penilaian_pelanggan');
    }
}
