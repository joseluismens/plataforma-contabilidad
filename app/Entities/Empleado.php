<?php
namespace App\Entities;
use CodeIgniter\Entity;

class Empleado extends Entity{
    protected $attributes = [
        'nombres'=>null,
        'rut'=>null,
        'paterno'=>null,
        'materno'=>null,
        'fecha_nacimiento'=>null,
        'direccion'=>null,
        'comuna'=>null,
        'telefono'=>null,
        'celular'=>null,
        'email'=>null,
        'genero'=>null,
        'nacionalidad'=>null,
        'estado_civil'=>null,
        'discapacidad'=>null,
        'foto'=>null,
        'afp'=>null,
        'apv_tipo'=>null,
        'apv_tributable'=>null,
        'apv'=>null,
        'apv_institucion'=>null,
        'ex_caja'=>null,
        'cotizacion_ex_caja'=>null,
        'estado_civil'=>null,
        'isapre'=>null,
        'isapre_plan_uf'=>null,
        'plan_isapre'=>null,
        'plan_isapre_porcentaje'=>null,
        'tramo'=>null,
        'cargas_simples'=>null,
        'cargas_invalidez'=>null,
        'cargas_maternales'=>null,
        'jubilado'=>null,
        'seguro_censatia_2002'=>null,
        'seguro_censatia_empresarial'=>null,
        'seguro_censatia_fondo_solidario'=>null,
        'seguro_censantia_afp'=>null,
        'seguro_invalidez'=>null,
        'trabajo_pesado'=>null,
        'trabajo_pesajo_porcentaje'=>null,
        'cuenta2'=>null,
        'cuenta2_tipo'=>null,
        'cuenta2_valor'=>null,
        'cuenta2_afp'=>null,
        'mutual'=>null,
        'socio_lre'=>null,
        'metodo'=>null,
        'cuenta'=>null,
        'banco'=>null,
        'tipo_pago'=>null,
         'id_empresa' =>null];
    
}