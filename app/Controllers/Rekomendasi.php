<?php

namespace App\Controllers;

use App\Models\M_PenilaianPerusahaan;
use CodeIgniter\Controller;

class Rekomendasi extends BaseController 
{   
    protected $model;

    public function __construct(){
        $this->model = new M_PenilaianPerusahaan();
        helper('en');
        $this->session = service('session');
        $this->auth   = service('authentication');
    }
    
    public function index() {
        $hasilPencarian = $this->session->getFlashdata('hasilPencarian'); // Ambil data dari session atau flashdata
        
        $data = [ 
            'judul' => 'Rekomendasi Pelanggan',
            'hasilPencarian' => $hasilPencarian
        ];
    
        return view('template/v_header', $data) .
               view('template/v_sidebar') .
               view('template/v_topbar') .
               view('RekomendasiPelanggan/index') .
               view('template/v_footer');
    }

    public function cariRekomendasi() {
        // Gunakan variabel $this->model yang sudah didefinisikan di constructor
        $tingkatTekstur = $this->request->getPost('tingkatTekstur');
        $tingkatKeperawatan = $this->request->getPost('tingkatKeperawatan');
        $tingkatKetahanan = $this->request->getPost('tingkatKetahanan');
    
        // Lakukan pencarian berdasarkan kriteria yang diberikan
        $hasilPencarian = $this->model->cariRekomendasikan($tingkatTekstur, $tingkatKeperawatan, $tingkatKetahanan);
    
        // Simpan hasil pencarian dalam session atau flash data
        $this->session->setFlashdata('hasilPencarian', $hasilPencarian);
    
        // Redirect ke halaman hasil rekomendasi
        return redirect()->to('/Rekomendasi');
    }
}    
?>
