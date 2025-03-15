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

        // 📌 Konversi Kategori ke Angka
        $convert = [
            'Rendah' => 1,
            'Sedang' => 2,
            'Tinggi' => 3,
            'Sedikit' => 1,
            'Sedang' => 2,
            'Banyak' => 3,
            'Ada' => 1,
            'Tidak Ada' => 0,
            '0-1 tahun' => 1,
            '2-5 tahun' => 2,
            '>5 tahun' => 3,
            'Manufaktur' => 1,
            'Dagang' => 2,
            'Jasa' => 3,
            'Perkotaan' => 1,
            'Pedesaan' => 2,
            'Lokal' => 1,
            'Regional' => 2,
            'Nasional' => 3,
            'Ya' => 1,
            'Tidak' => 0,
            'Manual' => 1,
            'Semi-Digital' => 2,
            'Digital' => 3,
            'Tidak Online' => 1,
            'Sosial Media' => 2,
            'Marketplace' => 3
        ];

        // 📌 Ambil data dari form
        $data = [
            'nama_usaha'      => $this->request->getPost('nama_usaha'),
            'pemilik_usaha'   => $this->request->getPost('pemilik_usaha'),
            'no_telepon'      => $this->request->getPost('no_telepon'),
            'email'           => $this->request->getPost('email'),
            'alamat_usaha'    => $this->request->getPost('alamat_usaha'),
            'pendapatan'      => $this->request->getPost('pendapatan'),
            'jumlah_karyawan' => $this->request->getPost('jumlah_karyawan'),
            'modal_awal'      => $this->request->getPost('modal_awal'),
            'legalitas'       => $this->request->getPost('legalitas'),
            'lama_berdiri'    => $this->request->getPost('lama_berdiri'),
            'jenis_usaha'     => $this->request->getPost('jenis_usaha'),
            'lokasi_usaha'    => $this->request->getPost('lokasi_usaha'),
            'aset_usaha'      => $this->request->getPost('aset_usaha'),
            'omzet_tahunan'   => $this->request->getPost('omzet_tahunan'),
            'skala_usaha'     => $this->request->getPost('skala_usaha'),
            'koperasi'        => $this->request->getPost('koperasi'),
            'npwp'            => $this->request->getPost('npwp'),
            'sertifikasi'     => $this->request->getPost('sertifikasi'),
            'akses_perbankan' => $this->request->getPost('akses_perbankan'),
            'kredit_umkm'     => $this->request->getPost('kredit_umkm'),
            'teknologi'       => $this->request->getPost('teknologi'),
            'marketplace'     => $this->request->getPost('marketplace')
        ];

        $convert_data = [
            'pendapatan' => $convert[$this->request->getPost('pendapatan')],
            'aset_usaha' => $convert[$this->request->getPost('aset_usaha')],
            'omzet_tahunan' => $convert[$this->request->getPost('omzet_tahunan')],
            'modal_awal' => $convert[$this->request->getPost('modal_awal')],
            'jumlah_karyawan' => $convert[$this->request->getPost('jumlah_karyawan')],
            'legalitas' => $convert[$this->request->getPost('legalitas')],
            'lama_berdiri' => $convert[$this->request->getPost('lama_berdiri')],
            'jenis_usaha' => $convert[$this->request->getPost('jenis_usaha')],
            'lokasi_usaha' => $convert[$this->request->getPost('lokasi_usaha')],
            'skala_usaha' => $convert[$this->request->getPost('skala_usaha')],
            'koperasi' => $convert[$this->request->getPost('koperasi')],
            'npwp' => $convert[$this->request->getPost('npwp')],
            'sertifikasi' => $convert[$this->request->getPost('sertifikasi')],
            'akses_perbankan' => $convert[$this->request->getPost('akses_perbankan')],
            'kredit_umkm' => $convert[$this->request->getPost('kredit_umkm')],
            'teknologi' => $convert[$this->request->getPost('teknologi')],
            'marketplace' => $convert[$this->request->getPost('marketplace')]
        ];

        // 📌 Validasi Input
        $validationRules = [
            'nama_usaha'      => 'required',
            'pemilik_usaha'   => 'required',
            'no_telepon'      => 'required|numeric|min_length[10]|max_length[15]',
            'email'           => 'required|valid_email',
            'alamat_usaha'    => 'required',
            'pendapatan'      => 'required',
            'jumlah_karyawan' => 'required',
            'modal_awal'      => 'required',
            'legalitas'       => 'required',
            'lama_berdiri'    => 'required',
            'jenis_usaha'     => 'required',
            'lokasi_usaha'    => 'required',
            'aset_usaha'      => 'required',
            'omzet_tahunan'   => 'required',
            'skala_usaha'     => 'required',
            'koperasi'        => 'required',
            'npwp'            => 'required',
            'sertifikasi'     => 'required',
            'akses_perbankan' => 'required',
            'kredit_umkm'     => 'required',
            'teknologi'       => 'required',
            'marketplace'     => 'required',
            'logo_usaha'      => 'uploaded[logo_usaha]|is_image[logo_usaha]|max_size[logo_usaha,2048]|mime_in[logo_usaha,image/png,image/jpeg,image/jpg]'
        ];

        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Data tidak valid. Silakan periksa kembali!',
                'errors' => $this->validator->getErrors()
            ])->setStatusCode(400);
        }

        // 📌 Upload Logo Usaha
        $logo = $this->request->getFile('logo_usaha');
        if ($logo->isValid() && !$logo->hasMoved()) {
            $logoName = $logo->getRandomName();
            $logo->move('uploads/logo_umkm', $logoName);
            $data['logo_usaha'] = 'uploads/logo_umkm/' . $logoName;
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Gagal mengunggah logo usaha.'
            ])->setStatusCode(400);
        }

        // 📌 Simpan Data ke Database
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
