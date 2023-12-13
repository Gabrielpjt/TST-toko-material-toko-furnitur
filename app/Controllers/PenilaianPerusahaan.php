<?php

namespace App\Controllers;


class PenilaianPelanggan extends BaseController
{
    public function index() : string
    {
        $data = [ 
            'judul' => 'Data Penilaian Perusahaan'
        ];
        return view('template/v_header', $data).view('template/v_sidebar').view('template/v_topbar').view('PenilaianPerusahaan/index').view('template/v_footer');
    }
}
