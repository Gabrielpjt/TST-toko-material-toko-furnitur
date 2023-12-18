<?php

namespace App\Models;

use CodeIgniter\Model;

class M_PenilaianPelanggan extends Model
{
    protected $table = 'penilaian_pelanggan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jenis_kayu', 'merek_kayu', 'review', 'tekstur', 'ketahanan', 'keperawatan'];

    public function getPenilaian($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
