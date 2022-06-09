<?php 
namespace App\Models;

use CodeIgniter\Model;

class ContratoModel extends Model{
    protected $table      = 'contratos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'suc',
        'cargo',
        'horario',
        'suc_cc',
        'renta_tipo',
        'renta',
        'meses_cotizados',
        'zona_extrema',
        'domicilio_laboral',
        'tipo_contrato',
        'desde',
        'hasta',
        'gratificacion',
        'factor_he',
        'colacion',
        'movilizacion',
        'dias_vacaciones',
        'finiquito_causa',
        'fecha_finiquito',
        'monto_aviso',
        'monto_indemnizacion',
        'monto_vacaciones',
        'id_empleado',

    ];
    protected $returnType   ='App\Entities\Contrato';

}