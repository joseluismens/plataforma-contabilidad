<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration{
    public function up(){

        // Uncomment below if want config

         $this->forge->addField([
         		'id'          		=> [
         				'type'           => 'INT',
         				'unsigned'       => TRUE,
         				'auto_increment' => TRUE
         		],
         		'name'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '100',
         		],
                 'email'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                ],
                'password'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>false
                ],
                'color'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true
                ],
                'created_at'=> array(
                    'type'      => 'timestamp',
                ),

            
                
         ]);
         $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down(){
        $this->forge->dropTable('users');
    }
}