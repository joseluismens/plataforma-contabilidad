<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empleados extends Migration{
    public function up(){

        // Uncomment below if want config
        $this->db->disableForeignKeyChecks();

         $this->forge->addField([
         		'id'          		=> [
        				'type'           => 'INT',
         				'unsigned'       => TRUE,
         				'auto_increment' => TRUE
         		],
         		'rut'       		=> [
         				'type'           => 'INT',
         				'unsigned'     => '100',

         		],
                 'paterno'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'materno'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'nombres'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'fecha_nacimiento'       		=> [
                    'type'           => 'Date',
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
                'telefono'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'celular'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'email'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'genero'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'nacionalidad'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'estado_civil'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'discapacidad'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'foto'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                    'null'=>true

                ],
                'afp'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'apv_tipo'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'apv_tributable'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'apv'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'apv_institucion'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'ex_caja'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'cotizacion_ex_caja'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'isapre'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'isapre_plan_uf'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'plan_isapre'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'plan_isapre_porcentaje'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'tramo'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'cargas_simples'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'cargas_invalidez'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'cargas_maternales'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'jubilado'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],

                'seguro_cesantia_2002'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'seguro_cesantia_empresarial'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'seguro_cesantia_fondo_solidario'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'seguro_cesantia_afp'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'seguro_invalidez'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'trabajo_pesado'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'trabajo_pesado_porcentaje'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'cuenta_2_tipo'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'cuenta_2_valor'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'cuenta_2_afp'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'mutual'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'socio_lre'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'metodo'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'cuenta'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'banco'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'tipo_pago'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null'=>true

                ],
                'id_empresa'          		=> [
                    'type'           => 'INT',
                     'unsigned'       => TRUE,
                     'auto_increment' => TRUE
             ],
                

         ]);
         $this->forge->addKey('id', TRUE);
         $this->db->enableForeignKeyChecks();

         $this->forge->addForeignKey('id_empresa', 'empresas','id');

        $this->forge->createTable('empleados');
    }

    public function down(){
        $this->forge->dropTable('empleados');
    }
}