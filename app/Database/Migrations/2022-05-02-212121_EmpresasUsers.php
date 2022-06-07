<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class EmpresasUsers extends Migration
{
    public function up(){

        // Uncomment below if want config
        $this->db->disableForeignKeyChecks();

         $this->forge->addField([
        		'user_id'          		=> [
        				'type'           => 'INT',
                        'unsigned' => TRUE
         		],
         		'empresa_id'       		=> [
         				'type'           => 'INT',
                         'unsigned' => TRUE
         			
         		],
        ]);
        $this->db->enableForeignKeyChecks();

         $this->forge->addForeignKey('user_id','users','id');
         $this->forge->addForeignKey('empresa_id','empresas','id');


        $this->forge->createTable('users_empresas');
    }

    public function down(){
        $this->forge->dropTable('users_empresas');
    }
}
