<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UmkmKelayakanModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UmkmModel;
use App\Models\UmkmPrediksiModel;

class FormUMKMController extends BaseController
{
    public function index()
    {
        return view('formulir/input_form');
    }

    public function submit()
    {
        $umkmModel = new UmkmModel();
        $umkmModelKelayakan = new UmkmKelayakanModel();
        $umkmModelPrediksi = new UmkmPrediksiModel();
        $apiUrl = "http://127.0.0.1:5000/predict";

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

        // 📌 Konversi Data ke Format Angka untuk API Flask
        $convert_data = [];
        foreach ($data as $key => $value) {
            if (isset($convert[$value])) {
                $convert_data[$key] = $convert[$value];
            }
        }

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

        // Kirim data ke API Flask dengan cURL
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($convert_data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Konversi hasil JSON ke array PHP
        $result = json_decode($response, true);

        if ($httpCode == 200 && isset($result['status']) && $result['status'] == 'success') {
            // 📌 Simpan Data UMKM ke Database
            if ($umkmModel->insert($data)) {
                $umkmId = $umkmModel->getInsertID();

                // 📌 Simpan Data Kelayakan UMKM
                $umkmModelKelayakan->insert(array_merge(['umkm_id' => $umkmId], $convert_data));

                // 📌 Simpan Hasil Prediksi ke umkm_prediksi
                $umkmModelPrediksi->insert([
                    'umkm_id'                  => $umkmId,
                    'prediksi'                 => $result['prediksi'],
                    'probabilitas_layak'       => $result['probabilitas']['layak'],
                    'probabilitas_tidak_layak' => $result['probabilitas']['tidak_layak']
                ]);

                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Data UMKM berhasil diproses!',
                    'prediksi' => $result['prediksi'],
                    'probabilitas' => $result['probabilitas'],
                    'data'    => $data
                ])->setStatusCode(200);
            }
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $result['message'] ?? 'Terjadi kesalahan saat memproses data!'
            ])->setStatusCode(400);
        }
    }
}
