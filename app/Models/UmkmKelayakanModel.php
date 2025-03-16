<?php

namespace App\Models;

use CodeIgniter\Model;

class UmkmKelayakanModel extends Model
{
    protected $table            = 'umkm_kelayakan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['umkm_id', 'pendapatan', 'aset_usaha,', 'omzet_tahunan', 'modal_awal', 'jumlah_karyawan', 'legalitas', 'lama_berdiri', 'jenis_usaha', 'lokasi_usaha', 'skala_usaha', 'koperasi', 'npwp', 'sertifikasi', 'akses_perbankan', 'kredit_umkm', 'teknologi', 'marketplace'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
