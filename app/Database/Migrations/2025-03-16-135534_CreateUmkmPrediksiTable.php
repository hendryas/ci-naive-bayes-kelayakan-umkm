<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUmkmPrediksiTable extends Migration
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
            'prediksi'         => [
                'type'           => 'ENUM',
                'constraint'     => ['Layak', 'Tidak Layak'],
                'null'           => false,
            ],
            'probabilitas_layak' => [
                'type'           => 'FLOAT',
                'null'           => false,
            ],
            'probabilitas_tidak_layak' => [
                'type'           => 'FLOAT',
                'null'           => false,
            ],
            'created_at'       => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'       => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('umkm_id', 'umkm', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('umkm_prediksi');
    }

    public function down()
    {
        $this->forge->dropTable('umkm_prediksi');
    }
}
