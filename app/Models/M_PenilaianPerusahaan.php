<?php

namespace App\Models;

use CodeIgniter\Model;

class M_PenilaianPerusahaan extends Model {
    protected $table = 'data_penilaian_kayu_dari_perusahaan'; // Sesuaikan nama tabel dengan aturan penamaan

    public function getAllData() {
        return $this->findAll(); // Menggunakan method findAll() untuk mengambil semua data dari tabel
    }
}
