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
        $data = [
            'judul' => 'Daftar Penilaian Pelanggan',
            'penilaianPelanggan' => $this->model->getPenilaian()
        ];
        return
            view('PenilaianPelanggan/index', $data);
    }

    public function form()
    {
        session();
        $data = [
            'judul' => 'Form Penilaian Pelanggan',
            'validation' => \Config\Services::validation()
        ];
        return
            view('PenilaianPelanggan/form', $data);
    }

    public function save()
    {

        $this->model->save([
            'jenis_kayu' => $this->request->getPost('jenis_kayu'),
            'merek_kayu' => $this->request->getPost('merek_kayu'),
            'review' => $this->request->getPost('review'),
            'tekstur' => $this->request->getPost('tekstur'),
            'ketahanan' => $this->request->getPost('ketahanan'),
            'keperawatan' => $this->request->getPost('keperawatan')
        ]);
        return response('success', 200);
    }

    public function detail($id)
    {
        $data = [
            'judul' => 'Detail Penilaian',
            'penilaianPelanggan' => $this->model->getPenilaian($id)
        ];
        if (empty($data['penilaianPelanggan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Penilaian ' . $id . ' Tidak Ditemukan');
        }
        return
            view('PenilaianPelanggan/detail', $data);
    }
}
