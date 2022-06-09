<?php

namespace App\Entities;
use CodeIgniter\Entity;

class Contrato extends Entity{
    protected $attributes = [
        'id' =>null,
        'suc'=>null,
        'cargo'=>null,
        'horario'=>null,
        'suc_cc'=>null,
        'renta_tipo'=>null,
        'renta'=>null,
        'meses_cotizados'=>null,
        'zona_extrema'=>null,
        'domicilio_laboral'=>null,
        'tipo_contrato'=>null,
        'desde'=>null,
        'hasta'=>null,
        'gratificacion'=>null,
        'factor_he'=>null,
        'colacion'=>null,
        'movilizacion'=>null,
        'dias_vacaciones'=>null,
        'finiquito_causa'=>null,
        'fecha_finiquito'=>null,
        'monto_aviso'=>null,
        'monto_indemnizacion'=>null,
        'monto_vacaciones'=>null,
        'id_empleado'=>null
    ];
    
}