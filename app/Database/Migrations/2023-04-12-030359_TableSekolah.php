<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableSekolah extends Migration
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
            'nama_sekolah' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            
            'npsn' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
            ],
            'nis' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
            ],
            
            
            'alamat_sekolah' => [
                'type'       => 'TEXT',
                'null' => true,
            ],

            'kepala_sekolah' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nip_kepala_sekolah' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'jabatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('sekolah');
    }

    public function down()
    {
        $this->forge->dropTable('sekolah');
    }
}
