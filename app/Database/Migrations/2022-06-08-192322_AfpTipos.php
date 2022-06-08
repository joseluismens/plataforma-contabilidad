<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AfpTipos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          		=> [
                    'type'           => 'INT',
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
            ],
            'name'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
            ]

       
           
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('afp_tipos');
    }

    public function down()
    {
        
    }
}
