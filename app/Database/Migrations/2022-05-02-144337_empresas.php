<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empresas extends Migration{
    public function up(){

        // Uncomment below if want config

         $this->forge->addField([
         		'id'          		=> [
         				'type'           => 'INT',
         				'unsigned'       => TRUE,
         				'auto_increment' => TRUE
         		],
         		'nombre'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '100',
         		],
                 'razon_social'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                ],
                'rut'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true
                ],
                'giro'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true
                ],
                'email'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true
                ],
                'rep_legal'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'rut_rep_legal'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],'rep_legal2'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'rut_rep_legal2'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                 'direccion'       		=> [
                     'type'           => 'VARCHAR',
                     'constraint'     => '100',
                     'null'=>true

                ],
                
                'comuna'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                
                'ciudad'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'telefono'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'mutual'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'ciudad'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'factor_mutual'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'caja_compensacion'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'logo'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                    'null'=>true

                ],
                
         ]);
         $this->forge->addKey('id', TRUE);
        $this->forge->createTable('empresas');
    }

    public function down(){
        $this->forge->dropTable('empresas');
    }
}