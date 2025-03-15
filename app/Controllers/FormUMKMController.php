<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UmkmModel;

class FormUMKMController extends BaseController
{
    public function index()
    {
        return view('formulir/input_form');
    }

    public function submit()
    {
        $umkmModel = new UmkmModel();

        $nama_usaha      = $this->request->getPost('nama_usaha');
        $pemilik_usaha   = $this->request->getPost('pemilik_usaha');
        $no_telepon      = $this->request->getPost('no_telepon');
        $email           = $this->request->getPost('email');
        $alamat_usaha    = $this->request->getPost('alamat_usaha');
        $pendapatan      = $this->request->getPost('pendapatan');
        $jumlah_karyawan = $this->request->getPost('jumlah_karyawan');
        $modal_awal      = $this->request->getPost('modal_awal');
        $legalitas       = $this->request->getPost('legalitas');
        $lama_berdiri    = $this->request->getPost('lama_berdiri');
        $jenis_usaha     = $this->request->getPost('jenis_usaha');
        $lokasi_usaha    = $this->request->getPost('lokasi_usaha');

        $validationRules = [
            'nama_usaha'      => 'required',
            'pemilik_usaha'   => 'required',
            'no_telepon'      => 'required|numeric',
            'email'           => 'required|valid_email',
            'alamat_usaha'    => 'required',
            'logo_usaha'      => 'uploaded[logo_usaha]|is_image[logo_usaha]|max_size[logo_usaha,2048]|mime_in[logo_usaha,image/png,image/jpeg,image/jpg]',
            'pendapatan'      => 'required',
            'jumlah_karyawan' => 'required',
            'modal_awal'      => 'required',
            'legalitas'       => 'required',
            'lama_berdiri'    => 'required',
            'jenis_usaha'     => 'required',
            'lokasi_usaha'    => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Data tidak valid. Silakan periksa kembali!',
                'errors' => $this->validator->getErrors()
            ])->setStatusCode(400);
        }

        $logo = $this->request->getFile('logo_usaha');
        if ($logo->isValid() && !$logo->hasMoved()) {
            $logoName = $logo->getRandomName();
            $logo->move('uploads/logo_umkm', $logoName);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Gagal mengunggah logo usaha.'
            ])->setStatusCode(400);
        }

        $data = [
            'nama_usaha'      => $nama_usaha,
            'pemilik_usaha'   => $pemilik_usaha,
            'no_telepon'      => $no_telepon,
            'email'           => $email,
            'alamat_usaha'    => $alamat_usaha,
            'logo_usaha'      => 'uploads/logo_umkm/' . $logoName,
            'pendapatan'      => $pendapatan,
            'jumlah_karyawan' => $jumlah_karyawan,
            'modal_awal'      => $modal_awal,
            'legalitas'       => $legalitas,
            'lama_berdiri'    => $lama_berdiri,
            'jenis_usaha'     => $jenis_usaha,
            'lokasi_usaha'    => $lokasi_usaha,
        ];

        if ($umkmModel->insert($data)) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Data UMKM berhasil disimpan!',
                'data'    => $data
            ])->setStatusCode(200);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Gagal menyimpan data!'
            ])->setStatusCode(500);
        }
    }
}
