<?php

namespace App\Controllers; 

use App\Controllers\BaseController; 
use App\Models\M_PenilaianPerusahaan;

class PenilaianPerusahaan extends BaseController 
{   
    protected $model; // Perbaiki konvensi penamaan variabel
    
    public function __construct(){
        $this->model = new M_PenilaianPerusahaan();
    }
    
    public function index()
    {
        $data = [ 
            'judul' => 'Data Penilaian Perusahaan',
            'penilaianperusahaan' => $this->model->getAllData()
        ];
        
        // Menggunakan view() dengan array dalam single method call
        return view('template/v_header', $data) .
        view('template/v_sidebar') .
        view('template/v_topbar') .
        view('PenilaianPerusahaan/index') .
        view('template/v_footer');
    }

    public function tambah(){
        $data = [
            "Jenis_Kayu" => $this->request->getPost('Jenis_Kayu'),
            "Merek_Kayu" => $this->request->getPost('Merek_Kayu'),
            "Tingkat_Tekstur" => $this->request->getPost('Tingkat_Tekstur'),
            "Tingkat_Ketahanan" => $this->request->getPost('Tingkat_Ketahanan'),
            "Tingkat_Keperawatan" => $this->request->getPost('Tingkat_Keperawatan'),
            "Harga" => $this->request->getPost('Harga'),
            "Massa_Jenis" => $this->request->getPost('Massa_Jenis'),
            "Tipe_Finishing_Warna" => $this->request->getPost('Tipe_Finishing_Warna'),
            "Kelebihan" => $this->request->getPost('Kelebihan'),
            "Kekurangan" => $this->request->getPost('Kekurangan')
        ];

        //insert data
        $success = $this->model->tambah($data);
        if ($success){
            return redirect()->to(base_url('PenilaianPerusahaan'));
        }
    }
}
