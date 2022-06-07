<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmpleadoModel;
use App\Models\EmpresaModel;

class EmpleadoController extends Controller{

    function listAll($id){
        $empresaModel = new EmpresaModel();
        $empleadoModel = new EmpleadoModel();

         
        $data['empresa'] = $empresaModel->find($id);

        $data['empleados']= $empleadoModel ->where('id_empresa',$id)->get()->getResult();
        return view('empleado/listar',$data);
    }

    function edit($id ){
        $empresaModel = new EmpresaModel();
        $empleadoModel = new EmpleadoModel();

        $data['empleado'] = $empleadoModel->find($id);
        $data['empresa'] = $empresaModel->find($data['empleado']->id_empresa);
        return view ('empleado/nuevo',$data);
    }
    function editContrato($id){
        return view('/empleado/datos_contrato');
    }
}