<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notes extends Migration
{
    public function up()
    {   
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => false,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null'       => false,
            ],
            'body' => [
                'type' => 'VARCHAR',
                'constraint' => '2500',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('notes');
    }

    public function down()
    {
        $this->forge->dropTable('notes');
    }
}
