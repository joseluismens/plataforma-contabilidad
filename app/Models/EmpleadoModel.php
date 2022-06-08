<?php 
namespace App\Models;

use CodeIgniter\Model;

class EmpleadoModel extends Model{
    protected $table      = 'empleados';
    protected $primaryKey = 'id';
    protected $allowedFields    = ['nombres',
                                    'rut',
                                    'paterno',
                                    'materno',
                                    'fecha_nacimiento',
                                    'direccion',
                                    'comuna',
                                    'telefono',
                                    'celular',
                                    'email',
                                    'genero',
                                    'nacionalidad',
                                    'estado_civil',
                                    'discapacidad',
                                    'foto',
                                    'afp',
                                    'apv_tipo',
                                    'apv_tributable',
                                    'apv',
                                    'apv_institucion',
                                    'ex_caja',
                                    'cotizacion_ex_caja',
                                    'estado_civil',
                                    'isapre',
                                    'isapre_plan_uf',
                                    'plan_isapre',
                                    'plan_isapre_porcentaje',
                                    'tramo',
                                    'cargas_simples',
                                    'cargas_invalidez',
                                    'cargas_maternales',
                                    'jubilado',
                                    'seguro_cesantia_2002',
                                    'seguro_cesantia_empresarial',
                                    'seguro_cesantia_fondo_solidario',
                                    'seguro_cesantia_afp',
                                    'seguro_invalidez',
                                    'trabajo_pesado',
                                    'trabajo_pesado_porcentaje',
                                    'cuenta2_tipo',
                                    'cuenta2_valor',
                                    'cuenta2_afp',
                                    'mutual',
                                    'socio_lre',
                                    'metodo',
                                    'cuenta',
                                    'banco',
                                    'tipo_pago',
                                    'id_empresa' ];
        
     protected $returnType   ='App\Entities\Empleado';
    protected $useTimestamps=false;                           

   
     
}