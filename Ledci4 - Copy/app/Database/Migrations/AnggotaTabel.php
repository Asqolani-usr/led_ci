<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AnggotaTabel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => '35',
                'null' => false,
            ],
            'alamat' => [
                'type' => 'text',
                'null' => true,
            ],
            'jenis_kelamin' => [
                'type' => 'CHAR',
                'constraint' => '2',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('anggota');
    }

    public function down()
    {
        $this->forge->dropTable('anggota');
    }
}
