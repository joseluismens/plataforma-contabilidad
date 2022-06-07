<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contratos extends Migration{
    public function up(){

        // Uncomment below if want config
        $this->db->disableForeignKeyChecks();

         $this->forge->addField([
        		'id'          		=> [
        				'type'           => 'INT',
         				'unsigned'       => TRUE,
         				'auto_increment' => TRUE
         		],
         		'suc'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '100',
                         'null' => true 
         		],
                 'cargo'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'horario'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'suc_cc'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'renta_tipo'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'renta'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'meses_cotizados'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'zona_extrema'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'domicilio_laboral'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'tipo_contrato'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'desde'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'hasta'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'gratificacion'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'factor_he'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'colacion'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'movilizacion'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'dias_vacaciones'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'finiquito_causa'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'fecha_finiquito'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'modo_aviso'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'monto_indemnizacion'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'monto_vacaciones'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                    'null' => true 
                ],
                'id_empleado'          		=> [
                    'type'           => 'INT',
                     'unsigned'       => TRUE,
                     'auto_increment' => TRUE
             ],
         ]);
         $this->forge->addKey('id', TRUE);
         $this->db->enableForeignKeyChecks();

         $this->forge->addForeignKey('id_empleado', 'empleados','id');

        $this->forge->createTable('contratos');
    }

    public function down(){
        $this->forge->dropTable('contratos');
    }
}