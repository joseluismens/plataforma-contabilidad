<?php
namespace App\Entities;
use CodeIgniter\Entity;


class Empresa extends Entity{
    protected $attributes = [
        'id'=>null,
        "nombre"=>null,
        'razon_social'=>null,
        "rut"=>null,
        'giro'=>null,
        "email"=>null,
        'rep_legal'=>null,
        "rut_rep_legal"=>null,
        'rep_legal2'=>null,
        "rut_rep_legal2"=>null,
        'direccion'=>null,
        "comuna"=>null,
        'ciudad'=>null,
        "telefono"=>null,
        'mutual'=>null,
        "factor_mutual"=>null,
        'caja_compensacion'=>null,
        "logo"=>null,

    ];
    protected $dates=['created_at'];
}