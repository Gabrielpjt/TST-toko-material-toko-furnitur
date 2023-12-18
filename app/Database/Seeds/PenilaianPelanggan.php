<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenilaianPelanggan extends Seeder
{
    public function run()
    {
        // Reset AUTO_INCREMENT pada tabel
        $this->db->query("ALTER TABLE penilaian_pelanggan AUTO_INCREMENT = 1");

        $jenis_kayu = ['oak', 'maple', 'ash', 'teak', 'birch', 'cedar', 'mahogany', 'pine', 'cherry', 'walnut'];
        $merek_kayu = ['Bridgestone', 'Ping', 'Mizuno', 'Wilson', 'Srixon', 'Callaway', 'Cobra', 'Adams', 'TaylorMade', 'Titleist'];
        $data = [];

        for ($i = 0; $i < 100; $i++) {
            $random_jenis_kayu = $jenis_kayu[array_rand($jenis_kayu)];
            $random_merek_kayu = $merek_kayu[array_rand($merek_kayu)];

            $data[] = [
                'jenis_kayu' => $random_jenis_kayu,
                'merek_kayu' => $random_merek_kayu,
                'review' => mt_rand(1, 10),
                'tekstur' => mt_rand(1, 10),
                'ketahanan' => mt_rand(1, 10),
                'keperawatan' => mt_rand(1, 10),
            ];
        }

        // Insert semua data sekaligus setelah perulangan selesai
        $this->db->table('penilaian_pelanggan')->insertBatch($data);
    }
}
