<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\M_PenilaianPerusahaan;

class Rekomendasi_API extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new M_PenilaianPerusahaan();
    }

    public function index()
    {
        // Mendapatkan data rekomendasi dari model
        $hasilPencarian = $this->model->getAllData(); // Mengganti ini dengan metode yang sesuai

        // Menyiapkan respons JSON
        return $this->response->setJSON([
            'status' => true,
            'message' => 'Success',
            'data' => $hasilPencarian
        ]);
    }

    public function cariRekomendasi()
    {
        $requestBody = $this->request->getBody();
        $data = json_decode($requestBody, true);
        // Autentikasi
        $username = $data['username'];
        $password = $data['password'];
        if ($username == env('API_USERNAME') && $password == env('API_PASSWORD')) {
        // Mengambil data dari body request untuk pencarian rekomendasi
        $tingkatTekstur = $data[0]["tingkatTekstur"];
        $tingkatKeperawatan = $data[0]["tingkatKeperawatan"];
        $tingkatKetahanan = $data[0]["tingkatKetahanan"];

        // Melakukan pencarian berdasarkan kriteria yang diberikan
        $hasilPencarian = $this->model->cariRekomendasikan($tingkatTekstur, $tingkatKeperawatan, $tingkatKetahanan);
        // Menyiapkan respons JSON
        return $this->response->setJSON([
            'status' => true,
            'message' => 'Success',
            'data' => $hasilPencarian
        ]);
        } else {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Unauthorized access'
            ]);
        }
    }
}
