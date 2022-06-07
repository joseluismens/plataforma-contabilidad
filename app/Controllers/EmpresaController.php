<?php

namespace App\Controllers;
use App\Models\EmpresaModel;
use App\Entities\Empresa;

class EmpresaController extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        return view('empresa/nueva');
    }
    public function modificar(){

        return view('empresa/modificar');
    }
    public function configurar(){

        return view('empresa/configurar');
    }
    public function add(){
        helper(['form']);
        $rules = [
            'nombre'          => 'required',
            'razon_social'         => 'required',
        ];
        if ($this->validate($rules)) {
            $empresaModel = new EmpresaModel();

            $data = [
                'nombre' =>$this->request->getVar('nombre'),
                'razon_social' =>$this->request->getVar('razon_social')
            ];
            $empresaModel->save($data);
            $empresa_id = $empresaModel->getInsertID();
            $id_users_empresas= $empresaModel->asignarEmpresa($empresa_id);
            
            return redirect()->to('empresa');
        }else{
            $data['validation'] = $this->validator;
            return  view('empresa', $data);
        }
    }
    public function listAll(){
        $empresaModel = new EmpresaModel();
        $data ['empresas'] = $empresaModel->empresasAsignadas();
        return view('empresa/listar',$data);
    }

    public function edit($id){
        $empresaModel = new EmpresaModel();
         
        $data['empresa'] = $empresaModel->find($id);
        return view('empresa/modificar',$data);
    }
    public function update(){
        helper(['form']);
        $rules = [
            'nombre' => 'required',
            'rut' => 'required',
            'razon_social' => 'required',
            'giro' => 'required',
            'email' => 'required',
            'rep_legal' => 'required',
            'rut_rep_legal' => 'required',
            'rep_legal2' => 'required',
            'rut_rep_legal2' => 'required',
            'direccion' => 'required',
            'comuna' => 'required',
            'ciudad' => 'required',
            'telefono' => 'required',
            'mutual' => 'required',
            'caja_compensacion' => 'required',

        ];
        if ($this->validate($rules)) {

            $empresaModel = new EmpresaModel();
            
            $id= $this->request->getVar('id');
            $data = [
               "nombre"=> $this->request->getVar('nombre'),
               "rut"=> $this->request->getVar('rut'),
               "razon_social"=> $this->request->getVar('razon_social'),
               "giro"=> $this->request->getVar('giro'),
               "email"=> $this->request->getVar('email'),
               "rep_legal"=> $this->request->getVar('rep_legal'),
               "rut_rep_legal"=> $this->request->getVar('rut_rep_legal'),
               "rep_legal2"=> $this->request->getVar('rep_legal2'),
               "rut_rep_legal2"=> $this->request->getVar('rut_rep_legal2'),
               "direccion"=> $this->request->getVar('direccion'),
               "comuna"=> $this->request->getVar('comuna'),
               "ciudad"=> $this->request->getVar('ciudad'),
               "telefono"=> $this->request->getVar('telefono'),
               "mutual"=> $this->request->getVar('mutual'),
               "factor_mutual"=> $this->request->getVar('factor_mutual'),
               "logo"=> $this->request->getVar('logo'),
               "caja_compensacion"=> $this->request->getVar('caja_compensacion'),
            

            ];
                $empresaModel->update($id,$data);

            return redirect()->to('empresa/listar');
        }
    }
}
