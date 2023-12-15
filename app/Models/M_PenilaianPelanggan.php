<?php

namespace App\Models;

use CodeIgniter\Model;

class M_PenilaianPelanggan extends Model
{
    protected $table = 'penilaian_pelanggan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getPenilaian($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
