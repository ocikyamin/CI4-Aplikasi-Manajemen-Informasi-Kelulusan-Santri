<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablePeriode extends Migration
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
            'periode_tahun' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'waktu_mulai' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'waktu_tutup' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'is_active' => [
                'type'       => 'INT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('periode');
    }

    public function down()
    {
        $this->forge->dropTable('periode');
    }
}
