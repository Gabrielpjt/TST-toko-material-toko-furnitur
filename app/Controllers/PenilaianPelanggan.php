<?php

namespace App\Controllers;

use App\Models\M_PenilaianPelanggan;


class PenilaianPelanggan extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new M_PenilaianPelanggan();
        helper('form');
    }
    public function index()
    {
        $penilaian = $this->model->findAll();
        $data = [
            'title' => 'Daftar Komik',
            'penilaianPelanggan' => $this->model->getPenilaian()
        ];
        return view('PenilaianPelanggan/index', $data);
    }
}
