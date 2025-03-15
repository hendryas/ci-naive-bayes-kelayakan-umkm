<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUmkmTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_usaha'      => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'pemilik_usaha'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'no_telepon'      => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => false,
            ],
            'email'           => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'alamat_usaha'    => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'logo_usaha'      => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'pendapatan'      => [
                'type'       => 'ENUM',
                'constraint' => ['Rendah', 'Sedang', 'Tinggi'],
                'null'       => false,
            ],
            'jumlah_karyawan' => [
                'type'       => 'ENUM',
                'constraint' => ['Sedikit', 'Sedang', 'Banyak'],
                'null'       => false,
            ],
            'modal_awal'      => [
                'type'       => 'ENUM',
                'constraint' => ['Rendah', 'Sedang', 'Tinggi'],
                'null'       => false,
            ],
            'legalitas'       => [
                'type'       => 'ENUM',
                'constraint' => ['Ada', 'Tidak Ada'],
                'null'       => false,
            ],
            'lama_berdiri'    => [
                'type'       => 'ENUM',
                'constraint' => ['0-1 tahun', '2-5 tahun', '>5 tahun'],
                'null'       => false,
            ],
            'jenis_usaha'     => [
                'type'       => 'ENUM',
                'constraint' => ['Jasa', 'Dagang', 'Manufaktur'],
                'null'       => false,
            ],
            'lokasi_usaha'    => [
                'type'       => 'ENUM',
                'constraint' => ['Perkotaan', 'Pedesaan'],
                'null'       => false,
            ],
            'created_at'      => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at'      => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('umkm');
    }

    public function down()
    {
        $this->forge->dropTable('umkm');
    }
}
