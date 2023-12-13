<?php

namespace App\Controllers; // Ubah namespace menjadi namespace yang sesuai dengan struktur folder

use App\Controllers\BaseController; // Ubah BaseController menjadi BaseControler dengan namespace yang sesuai
use App\Models\M_PenilaianPerusahaan;

class PenilaianPerusahaan extends BaseController // Hapus \PenilaianPerusahaan dari namespace
{
    public function index()
    {
        $model = new M_PenilaianPerusahaan();


        $data = [ 
            'judul' => 'Data Penilaian Perusahaan',
            'penilaianperusahaan' => $model->getAllData()
        ];
        
        // Gunakan return() untuk mengembalikan view sebagai string
        return view('template/v_header', $data) .
               view('template/v_sidebar') .
               view('template/v_topbar') .
               view('PenilaianPerusahaan/index') .
               view('template/v_footer');
    }
}
