<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sekolah_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
            'periode_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
            'nomor_surat' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null' => true,
            ],
            'nisn' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
            ],
            
            'nopes' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'tmp_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null' => true,
            ],
            'tgl_lahir' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null' => true,
            ],
            'jurusan' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null' => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null' => true,
            ],
            'img' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tm_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('tm_siswa');
    }
}
