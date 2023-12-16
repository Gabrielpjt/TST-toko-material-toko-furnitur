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
        return view('template/v_header', $data) .
            view('template/v_sidebar') .
            view('template/v_topbar') .
            view('PenilaianPelanggan/index') .
            view('template/v_footer');
    }

    public function form()
    {
        session();
        $data = [
            'judul' => 'Form Penilaian Pelanggan',
            'validation' => \Config\Services::validation()
        ];
        return view('template/v_header', $data) .
            view('template/v_sidebar') .
            view('template/v_topbar') .
            view('PenilaianPelanggan/form') .
            view('template/v_footer');
    }

    public function save()
    {
        if (!$this->validate([

            'jenis_kayu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Field harus diisi',
                ]
            ],
            'merek_kayu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Field harus diisi',
                ]
            ],
            'penilaian_keseluruhan' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Field harus diisi',
                ]
            ],
            'tekstur' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Field harus diisi',
                ]
            ],
            'ketahanan' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Field harus diisi',
                ]
            ],
            'keperawatan' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Field harus diisi',
                ]
            ],
            'kelebihan' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Field harus diisi',
                ]
            ],
            'kekurangan' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Field harus diisi',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        $this->model->save([
            'jenis_kayu' => $this->request->getVar(['jenis_kayu']),
            'merek_kayu' => $this->request->getVar(['merek_kayu']),
            'penilaian_keseluruhan' => $this->request->getVar(['penilaian_keseluruhan']),
            'tekstur' => $this->request->getVar(['tekstur']),
            'ketahanan' => $this->request->getVar(['ketahanan']),
            'keperawatan' => $this->request->getVar(['keperawatan']),
            'kelebihan' => $this->request->getVar(['kelebihan']),
            'kekurangan' => $this->request->getVar(['kekurangan']),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/');
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Penilaian',
            'penilaianPelanggan' => $this->model->getKomik($id)
        ];
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Penilaian ' . $id . ' Tidak Ditemukan');
        }
        return view('penilaianPelanggan/detail', $data);
    }
}
