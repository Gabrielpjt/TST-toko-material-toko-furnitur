<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class DataPenilaianKayuDariPerusahaan extends Seeder
{
    public function run()
    {
        // Reset AUTO_INCREMENT pada tabel
        $this->db->query("ALTER TABLE data_penilaian_kayu_dari_perusahaan AUTO_INCREMENT = 1");

        $jenis_kayu = ['oak', 'maple', 'ash', 'teak', 'birch', 'cedar', 'mahogany', 'pine', 'cherry', 'walnut'];
        $merek_kayu = ['Bridgestone', 'Ping', 'Mizuno', 'Wilson', 'Srixon', 'Callaway', 'Cobra', 'Adams', 'TaylorMade', 'Titleist'];
        $tipe_finishing_warna = ['textured', 'satin', 'glossy', 'metallic', 'matte'];
        $kelebihan = ['awet', 'ringan', 'fleksibel', 'berwarna alami', 'kuat', 'mudah dipotong', 'ramah lingkungan', 'berpori', 'mudah dipotong', 'mudah terbakar'];
        $kekurangan = ['Rentan terhadap rayap', 'Tidak tahan terhadap air', 'Membutuhkan perawatan khusus', 'Rentan terhadap jamur', 'Rentan terhadap perubahan cuaca', 'Mudah terbakar', 'Tidak tahan terhadap sinar UV', 'Rentan terhadap serangan hama', 'Rentan terhadap penyusutan'];

        $data = [];
        $temp = [];
        foreach($jenis_kayu as $kayu){
            foreach($merek_kayu as $merek){
                $random_tipe_finishing = $tipe_finishing_warna[array_rand($tipe_finishing_warna)];
                $random_kelebihan = $kelebihan[array_rand($kelebihan)];
                $random_kekurangan = $kekurangan[array_rand($kekurangan)];
                $toInsert = [
                    'Jenis_Kayu' => $kayu,
                    'Merek_Kayu' => $merek,
                    'Tingkat_Tekstur' => mt_rand(1, 10),
                    'Tingkat_Ketahanan' => mt_rand(1, 10),
                    'Tingkat_Keperawatan' => mt_rand(1, 10),
                    'Harga' => round(mt_rand(1000, 10000) + mt_rand() / mt_getrandmax(), 2),
                    'Massa_Jenis' => round(mt_rand(1000, 10000) + mt_rand() / mt_getrandmax(), 2),
                    'Tipe_Finishing_Warna' => $random_tipe_finishing,
                    'Kelebihan' => $random_kelebihan,
                    'Kekurangan' => $random_kekurangan
                ];
                    array_push($temp, $toInsert);
            }
        }
        $this->db->table('data_penilaian_kayu_dari_perusahaan')->insertBatch($temp);


        for ($i = 0; $i < 100; $i++) {
            $random_jenis_kayu = $jenis_kayu[array_rand($jenis_kayu)];
            $random_merek_kayu = $merek_kayu[array_rand($merek_kayu)];
            $random_tipe_finishing = $tipe_finishing_warna[array_rand($tipe_finishing_warna)];
            $random_kelebihan = $kelebihan[array_rand($kelebihan)];
            $random_kekurangan = $kekurangan[array_rand($kekurangan)];

            $data[] = [
                'Jenis_Kayu' => $random_jenis_kayu,
                'Merek_Kayu' => $random_merek_kayu,
                'Tingkat_Tekstur' => mt_rand(1, 10),
                'Tingkat_Ketahanan' => mt_rand(1, 10),
                'Tingkat_Keperawatan' => mt_rand(1, 10),
                'Harga' => round(mt_rand(1000, 10000) + mt_rand() / mt_getrandmax(), 2),
                'Massa_Jenis' => round(mt_rand(1000, 10000) + mt_rand() / mt_getrandmax(), 2),
                'Tipe_Finishing_Warna' => $random_tipe_finishing,
                'Kelebihan' => $random_kelebihan,
                'Kekurangan' => $random_kekurangan
                
            ];
        }

        // Insert semua data sekaligus setelah perulangan selesai
        $this->db->table('data_penilaian_kayu_dari_perusahaan')->insertBatch($data);
    }
}
