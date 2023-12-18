<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DBSeeder extends Seeder
{
    public function run()
    {
        $this->db->query('SET foreign_key_checks = 0');
        $this->db->table('data_penilaian_kayu_dari_perusahaan')->emptyTable();
        $this->db->table('penilaian_pelanggan')->emptyTable();

        print_r("Seeding Penilaiankayudariperusahaan, please wait...\n");
        $this->call('DataPenilaianKayuDariPerusahaan');
        $this->call('PenilaianPelanggan');
        
    }
}