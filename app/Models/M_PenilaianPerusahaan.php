<?php

namespace App\Models;

use CodeIgniter\Model;

class M_PenilaianPerusahaan extends Model {
    protected $table = 'data_penilaian_kayu_dari_perusahaan'; // Sesuaikan nama tabel dengan aturan penamaan

    public function getAllData() {
        return $this->findAll(); // Menggunakan method findAll() untuk mengambil semua data dari tabel
    }

    public function tambah($data){
        $this->db->table('data_penilaian_kayu_dari_perusahaan')->insert($data);
        return $this->db->insertID(); // Mengembalikan ID dari data yang baru saja dimasukkan
    }
}
