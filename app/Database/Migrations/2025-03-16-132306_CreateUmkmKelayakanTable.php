<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUmkmKelayakanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'umkm_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'pendapatan'       => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'aset_usaha'       => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'omzet_tahunan'    => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'modal_awal'       => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'jumlah_karyawan'  => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'legalitas'        => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'lama_berdiri'     => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'jenis_usaha'      => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'lokasi_usaha'     => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'skala_usaha'      => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'koperasi'         => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'npwp'             => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'sertifikasi'      => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'akses_perbankan'  => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'kredit_umkm'      => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'teknologi'        => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'marketplace'      => ['type' => 'TINYINT', 'constraint' => 1, 'null' => false],
            'created_at'       => ['type' => 'DATETIME', 'null' => true],
            'updated_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('umkm_kelayakan');
    }

    public function down()
    {
        $this->forge->dropTable('umkm_kelayakan');
    }
}
