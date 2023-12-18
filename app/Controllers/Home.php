<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Controllers\FetchingUserInsight;

class Home extends BaseController
{
    protected $session;
    protected $auth;

    public function __construct()
    {
        helper('en');
        $this->session = \Config\Services::session();
        $this->auth = \Config\Services::authentication();
    }

    public function fetchDataFromAPI()
    {
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
            $data = json_decode($response->getBody(), true); // Mendapatkan data dari respons dalam bentuk array
            return $data; // Mengembalikan data dari API
        } else {
            throw new \Exception('Gagal mengambil data dari API. Status Code: ' . $response->getStatusCode());
        }
    }

    public function index()
    {
        // Membuat objek FetchingUserInsight
        $fetchingUserInsight = new FetchingUserInsight();

        // Memuat data dari FetchingUserInsight
        $userInsightData = $this->fetchDataFromAPI(); // Menggunakan method fetchDataFromAPI dari class Home

        $data = [
            'judul' => 'Homepage',
            'userInsight' => $userInsightData // Memasukkan data dari FetchingUserInsight ke dalam data yang akan dikirim ke tampilan
        ];

        // Menggunakan fungsi view() untuk menampilkan view secara terpisah
        return view('template/v_header', $data) .
            view('template/v_sidebar') .
            view('template/v_topbar') .
            view('Home/index', $data) . // Mengirimkan data ke view Home/index
            view('template/v_footer');
    }
}
