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
        // Mengambil data dari body request
        $requestBody = $this->request->getJSON();

        // Mengambil data dari body request untuk pencarian rekomendasi
        $tingkatTekstur = $requestBody->tingkatTekstur;
        $tingkatKeperawatan = $requestBody->tingkatKeperawatan;
        $tingkatKetahanan = $requestBody->tingkatKetahanan;

        // Melakukan pencarian berdasarkan kriteria yang diberikan
        $hasilPencarian = $this->model->cariRekomendasikan($tingkatTekstur, $tingkatKeperawatan, $tingkatKetahanan);

        // Menyiapkan respons JSON
        return $this->response->setJSON([
            'status' => true,
            'message' => 'Success',
            'data' => $hasilPencarian
        ]);
    }
}
