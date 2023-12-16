<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPenilaianKayuDariPerusahaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 30,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Jenis_Kayu'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
            ],
            'Merek_Kayu' => [
                'type'           => 'VARCHAR',
                'constraint'     => '64',
            ],
            'Tingkat_Tekstur' => [
                'type'            => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'Tingkat_Ketahanan' => [
                'type'            => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'Tingkat_Keperawatan' => [
                'type'            => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'Harga' => [
                'type'            => 'INT',
                'constraint'     => 255,
                'unsigned'       => true,
            ],
            'Massa_Jenis' => [
                'type'            => 'INT',
                'constraint'     => 255,
                'unsigned'       => true,
            ],
            'Tipe_Finishing_Warna'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '64',
            ],
            'Kelebihan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '64',
            ],
            'Kekurangan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '64',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('data_penilaian_kayu_dari_perusahaan');
    }

    public function down()
    {
        $this->forge->dropTable('data_penilaian_kayu_dari_perusahaan');
    }
}
