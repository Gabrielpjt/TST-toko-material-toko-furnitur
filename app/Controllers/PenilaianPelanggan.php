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
        $requestBody = $this->request->getBody();
        $data = json_decode($requestBody, true);
        // Autentikasi
        $username = $data['username'];
        $password = $data['password'];
        if ($username == env('API_USERNAME') && $password == env('API_PASSWORD')){
            $data = $data[0];
            if (count($data) == 6){
                $this->model->save([
                    'jenis_kayu' => $data['jenis_kayu'],
                    'merek_kayu' => $data['merek_kayu'],
                    'review' => $data['review'],
                    'tekstur' => $data['tekstur'],
                    'ketahanan' => $data['ketahanan'],
                    'keperawatan' => $data['keperawatan']
                ]);
            } else if (count($data) > 1) {
                $this->model->insertBatch($data);
            }
            return $this->response->setJSON(['status' => 'success', 'message' => 'Data Telah Disimpan']);
        } else {
            return $this->response->setJSON(['status' => 'failed', 'message' => 'Unauthorized access']);
        }
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
