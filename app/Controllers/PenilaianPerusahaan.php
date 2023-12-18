<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_PenilaianPerusahaan;

class PenilaianPerusahaan extends BaseController
{
    protected $model; // Perbaiki konvensi penamaan variabel

    public function __construct()
    {
        $this->model = new M_PenilaianPerusahaan();
        helper('en');
        $this->session = service('session');
        $this->auth   = service('authentication');
    }

    public function index()
    {

        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? site_url($this->config->landingRoute);
            unset($_SESSION['redirect_url']);

            return redirect()
                ->to($redirectURL);
        }

        $data = [
            'judul' => 'Data Penilaian Perusahaan',
            'penilaianperusahaan' => $this->model->getAllData()
        ];

        // Menggunakan view() dengan array dalam single method call
        return
            view('PenilaianPerusahaan/index', $data);
    }

    public function tambah()
    {
        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? site_url($this->config->landingRoute);
            unset($_SESSION['redirect_url']);

            return redirect()
                ->to($redirectURL);
        }

        if (isset($_POST['tambah'])) {
            $validation = \Config\Services::validation();

            $validation->setRules([
                'Jenis_Kayu' => ['rules' => 'required|alpha_numeric|max_length[30]'],
                'Merek_Kayu' => ['rules' => 'required|alpha_numeric|max_length[30]'],
                'Tingkat_Tekstur' => ['rules' => 'required|integer|max_length[30]'],
                'Tingkat_Ketahanan' => ['rules' => 'required|integer|max_length[30]'],
                'Tingkat_Keperawatan' => ['rules' => 'required|integer|max_length[30]'],
                'Harga' => ['rules' => 'required|numeric|max_length[30]'],
                'Massa_Jenis' => ['rules' => 'required|numeric|max_length[30]'],
                'Tipe_Finishing_Warna' => ['rules' => 'required|alpha_numeric|max_length[30]'],
                'Kelebihan' => ['rules' => 'required|max_length[30]'],
                'Kekurangan' => ['rules' => 'required|max_length[30]'],
            ]);

            $isDataValid = $validation->withRequest($this->request)->run();

            if (!$isDataValid) {
                $errors = $validation->getErrors();

                session()->setFlashdata('err', $errors);

                return redirect()->to(base_url('PenilaianPerusahaan'));
            } else {
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
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to(base_url('PenilaianPerusahaan'));
                }
            }
        } else {
            return redirect()->to('/PenilaianPerusahaan');
        }
    }

    public function hapus($id)
    {

        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? site_url($this->config->landingRoute);
            unset($_SESSION['redirect_url']);

            return redirect()
                ->to($redirectURL);
        }

        $success = $this->model->hapus($id);
        if ($success) {
            session()->setFlashdata('message', 'Data berhasil dihapus');
        } else {
            session()->setFlashdata('message', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('PenilaianPerusahaan'));
    }
}
