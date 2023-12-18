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
        $requestBody = $this->request->getBody();
        $data = json_decode($requestBody, true);

        $logger = service('logger');
        // Mengambil data dari body request untuk pencarian rekomendasi
        $tingkatTekstur = $data["tingkatTekstur"];
        $tingkatKeperawatan = $data["tingkatKeperawatan"];
        $tingkatKetahanan = $data["tingkatKetahanan"];

        // Melakukan pencarian berdasarkan kriteria yang diberikan
        $hasilPencarian = $this->model->cariRekomendasikan($tingkatTekstur, $tingkatKeperawatan, $tingkatKetahanan);
        $logger->debug($hasilPencarian);
        // Menyiapkan respons JSON
        return $this->response->setJSON([
            'status' => true,
            'message' => 'Success',
            'data' => $hasilPencarian
        ]);
    }
}
