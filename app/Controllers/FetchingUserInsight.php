<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class FetchingUserInsight extends BaseController {

    public function fetchDataFromAPI() {
        // Tentukan URL endpoint dan data yang dibutuhkan
        $apiUrl = 'http://localhost:6161/api/user-insights?username=material-system-ZjhX1PaFjr4L1&password=material-system-access-password'; // Ganti dengan URL endpoint API Anda
        $requestData = [
            // Data yang ingin Anda kirim ke API jika diperlukan
        ];

        // Gunakan HTTP Request untuk mengakses API
        $client = Services::curlrequest();
        $response = $client->request('GET', $apiUrl);

        // Periksa respons dari API
        if ($response->getStatusCode() == 200) {
            $data = $response->getBody(); // Mendapatkan data dari respons
            return $data; // Mengembalikan data dari API
        } else {
            throw new \Exception('Gagal mengambil data dari API. Status Code: ' . $response->getStatusCode());
        }
    }
}
