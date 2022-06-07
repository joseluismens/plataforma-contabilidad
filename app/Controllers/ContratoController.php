<?php

namespace App\Controllers;

class ContratoController extends BaseController{

    public function index(){
        return view('contrato/nuevo');
    }
    public function configurar(){
        return view('contrato/configurar');
    }public function editar(){
        return view('contrato/editar');
    }public function sueldo_minimo(){
        return view('contrato/sueldo_minimo');
    }
}