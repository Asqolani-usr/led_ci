<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Organisasitabel extends Migration // Nama Tabel Organisasi
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => '35',
                'null' => false,
            ],
            'deskripsi' => [
                'type' => 'varchar',
                'constraint' => '255',
                'null' => true,
            ],
            'logo' => [
                'type' => 'varchar',
                'constraint' => '25',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('organisasi'); 
    }

    public function down()
    {
        $this->forge->dropTable('organisasi');
    }
}
