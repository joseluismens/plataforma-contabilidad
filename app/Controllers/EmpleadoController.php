<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmpleadoModel;
use App\Models\EmpresaModel;
use App\Models\ContratoModel;

use App\Models\TiposAfpModel;
class EmpleadoController extends Controller{

    function listAll($id){
        $empresaModel = new EmpresaModel();
        $empleadoModel = new EmpleadoModel();

         
        $data['empresa'] = $empresaModel->find($id);

        $data['empleados']= $empleadoModel ->where('id_empresa',$id)->get()->getResult();
        return view('empleado/listar',$data);
    }

    function edit($id ){
        $empleadoModel = new EmpleadoModel();
        $empresaModel = new EmpresaModel();
        $tiposAfpModel = new TiposAfpModel();
        $data['empleado'] = $empleadoModel->find($id);
        $data['empresa'] = $empresaModel->find($data['empleado']->id_empresa);
        $data['tipos_afp'] = $tiposAfpModel->findAll();
        return view ('empleado/editar',$data);
    }
    function editContrato($id){
        $contratoModel = new ContratoModel();
        $empleadoModel = new EmpleadoModel();
        $empresaModel = new EmpresaModel();
        $data['id_empleado']= $id;
        $data['contrato'] = $contratoModel->where('id_empleado',$id)->get()->getResultObject();
        if(count($data['contrato'])>0){
            $empleado = $empleadoModel->find($id);
            $data['empresa'] = $empresaModel->find($empleado->id_empresa);
        }
        return view('/empleado/datos_contrato',$data);
    }
    public function create($id){
        helper(['form']);
        $empresaModel = new EmpresaModel();
        $tiposAfpModel = new TiposAfpModel();
        $data['tipos_afp'] = $tiposAfpModel->findAll();

        $data['empresa'] = $empresaModel->find($id);
        return view('empleado/nuevo',$data);

    }
    public function add(){
        helper(['form','url']);
        
        $empleadoModel = new EmpleadoModel();
        $empresaModel = new EmpresaModel();
        $id_empresa  = $this->request->getVar('id_empresa');
        $datos['empresa'] = $empresaModel->find($id_empresa);

        $rules = [
            'rut'=>'required'
        ];
        if ($this->validate($rules)) {
            $data = [
                'id_empresa'=>$this->request->getVar('id_empresa'),
                'nombres'=>$this->request->getVar('nombres'),
                'rut'=>$this->request->getVar('rut'),
                'paterno'=>$this->request->getVar('paterno'),
                'materno'=>$this->request->getVar('materno'),
                'fecha_nacimiento'=>$this->request->getVar('fecha_nacimiento'),
                'direccion'=>$this->request->getVar('direccion'),
                'comuna'=>$this->request->getVar( 'comuna'),
                'telefono'=>$this->request->getVar('telefono'),
                'celular'=>$this->request->getVar('celular'),
                'email'=>$this->request->getVar('email'),
                'genero'=>$this->request->getVar('genero'),
                'nacionalidad'=>$this->request->getVar('nacionalidad'),
                'discapacidad'=>$this->request->getVar('discapacidad'),
                'foto'=>$this->request->getVar('foto'),
                'afp'=>$this->request->getVar('afp'),
                'apv_tipo'=>$this->request->getVar('apv_tipo'),
                'apv_tributable'=>$this->request->getVar('apv_tributable')!=null ? 'on':'off',
                'apv'=>$this->request->getVar('apv'),
                'apv_institucion'=>$this->request->getVar('apv_institucion'),
                'ex_caja'=>$this->request->getVar('ex_caja'),
                'cotizacion_ex_caja'=>$this->request->getVar('cotizacion_ex_caja'),
                'estado_civil'=>$this->request->getVar('estado_civil'),
                'isapre'=>$this->request->getVar('isapre'),
                'isapre_plan_uf'=>$this->request->getVar('isapre_plan_uf'),
                'plan_isapre'=>$this->request->getVar('plan_isapre'),
                'plan_isapre_porcentaje'=>$this->request->getVar('plan_isapre_porcentaje'),
                'tramo'=>$this->request->getVar('tramo'),
                'cargas_simples'=>$this->request->getVar('cargas_simples'),
                'cargas_invalidez'=>$this->request->getVar('cargas_invalidez'),
                'cargas_maternales'=>$this->request->getVar('cargas_maternales'),
                'jubilado'=>$this->request->getVar('jubilado')!=null ? 'on':'off',
                'seguro_cesantia_2002'=>$this->request->getVar('seguro_cesantia_2002')!=null ? 'on':'off',
                'seguro_cesantia_empresarial'=>$this->request->getVar('seguro_cesantia_empresarial')!=null ? 'on':'off',
                'seguro_cesantia_fondo_solidario'=>$this->request->getVar(  'seguro_cesantia_fondo_solidario')!=null ? 'on':'off',
                'seguro_censantia_afp'=>$this->request->getVar('seguro_censantia_afp'),
                'seguro_invalidez'=>$this->request->getVar('seguro_invalidez')!=null ? 'on':'off',
                'trabajo_pesado'=>$this->request->getVar('trabajo_pesado'),
                'trabajo_pesado_porcentaje'=>$this->request->getVar( 'trabajo_pesado_porcentaje'),
                'cuenta_2_tipo'=>$this->request->getVar( 'cuenta_2_tipo'),
                'cuenta_2_valor'=>$this->request->getVar('cuenta_2_valor'),
                'cuenta_2_afp'=>$this->request->getVar('cuenta_2_afp'),
                'mutual'=>$this->request->getVar('mutual'),
                'socio_lre'=>$this->request->getVar('socio_lre')!=null ? 'on':'off',
                'metodo'=>$this->request->getVar('metodo'),
                'cuenta'=>$this->request->getVar('cuenta'),
                'banco'=>$this->request->getVar('banco'),
                'tipo_pago'=>$this->request->getVar('tipo_pago')
            ];
            $empleadoModel->save($data);
        }
         return redirect()->to('/empresa/listar');
       
                
        
    }

    public function update($id){
        
        $empleadoModel = new EmpleadoModel();
        helper(['form']);
        if ($this->validate([
            'rut'=>'required',
            'nombres'=>'required',
            'paterno'=>'required',
            'materno'=>'required'
        ])) {
            $data = [
                'id_empresa'=>$this->request->getVar('id_empresa'),
                'nombres'=>$this->request->getVar('nombres'),
                'rut'=>$this->request->getVar('rut'),
                'paterno'=>$this->request->getVar('paterno'),
                'materno'=>$this->request->getVar('materno'),
                'fecha_nacimiento'=>$this->request->getVar('fecha_nacimiento'),
                'direccion'=>$this->request->getVar('direccion'),
                'comuna'=>$this->request->getVar( 'comuna'),
                'telefono'=>$this->request->getVar('telefono'),
                'celular'=>$this->request->getVar('celular'),
                'email'=>$this->request->getVar('email'),
                'genero'=>$this->request->getVar('genero'),
                'nacionalidad'=>$this->request->getVar('nacionalidad'),
                'discapacidad'=>$this->request->getVar('discapacidad'),
                'foto'=>$this->request->getVar('foto'),
                'afp'=>$this->request->getVar('afp'),
                'apv_tipo'=>$this->request->getVar('apv_tipo'),
                'apv_tributable'=>$this->request->getVar('apv_tributable')!=null ? 'on':'off',
                'apv'=>$this->request->getVar('apv'),
                'apv_institucion'=>$this->request->getVar('apv_institucion'),
                'ex_caja'=>$this->request->getVar('ex_caja'),
                'cotizacion_ex_caja'=>$this->request->getVar('cotizacion_ex_caja'),
                'estado_civil'=>$this->request->getVar('estado_civil'),
                'isapre'=>$this->request->getVar('isapre'),
                'isapre_plan_uf'=>$this->request->getVar('isapre_plan_uf'),
                'plan_isapre'=>$this->request->getVar('plan_isapre'),
                'plan_isapre_porcentaje'=>$this->request->getVar('plan_isapre_porcentaje'),
                'tramo'=>$this->request->getVar('tramo'),
                'cargas_simples'=>$this->request->getVar('cargas_simples'),
                'cargas_invalidez'=>$this->request->getVar('cargas_invalidez'),
                'cargas_maternales'=>$this->request->getVar('cargas_maternales'),
                'jubilado'=>$this->request->getVar('jubilado')!=null ? 'on':'off',
                'seguro_cesantia_2002'=>$this->request->getVar('seguro_cesantia_2002')!=null ? 'on':'off',
                'seguro_cesantia_empresarial'=>$this->request->getVar('seguro_cesantia_empresarial')!=null ? 'on':'off',
                'seguro_cesantia_fondo_solidario'=>$this->request->getVar(  'seguro_cesantia_fondo_solidario')!=null ? 'on':'off',
                'seguro_censantia_afp'=>$this->request->getVar('seguro_censantia_afp'),
                'seguro_invalidez'=>$this->request->getVar('seguro_invalidez')!=null ? 'on':'off',
                'trabajo_pesado'=>$this->request->getVar('trabajo_pesado'),
                'trabajo_pesado_porcentaje'=>$this->request->getVar( 'trabajo_pesado_porcentaje'),
                'cuenta_2_tipo'=>$this->request->getVar( 'cuenta_2_tipo'),
                'cuenta_2_valor'=>$this->request->getVar('cuenta_2_valor'),
                'cuenta_2_afp'=>$this->request->getVar('cuenta_2_afp'),
                'mutual'=>$this->request->getVar('mutual'),
                'socio_lre'=>$this->request->getVar('socio_lre')!=null ? 'on':'off',
                'metodo'=>$this->request->getVar('metodo'),
                'cuenta'=>$this->request->getVar('cuenta'),
                'banco'=>$this->request->getVar('banco'),
                'tipo_pago'=>$this->request->getVar('tipo_pago')
            ];
            $empleadoModel->update($id,$data);
            
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());

    }
    public function delete($id){
        $empleadoModel = new EmpleadoModel();

        $result= $empleadoModel->where('id',$id)->delete();
        if ($result) {
            return  redirect()->back();
        }
        dd($result);
    }

    public function updateContrato($id){
        $contratoModel = new ContratoModel();
        
        $contrato = $contratoModel->where('id_empleado', $id)->first();
        $input_contrato = [
            'suc'=>$this->request->getVar('suc'),
            'cargo'=>$this->request->getVar('cargo'),
            'horario'=>$this->request->getVar('horario'),
            'suc_cc'=>$this->request->getVar('suc_cc'),
            'renta_tipo'=>$this->request->getVar('renta_tipo'),
            'renta'=>$this->request->getVar('renta'),
            'meses_cotizados'=>$this->request->getVar('meses_cotizados'),
            'zona_extrema'=>$this->request->getVar('zona_extrema'),
            'domicilio_laboral'=>$this->request->getVar('domicilio_laboral'),
            'tipo_contrato'=>$this->request->getVar('tipo_contrato'),
            'desde'=>$this->request->getVar('desde'),
            'hasta'=>$this->request->getVar('hasta'),
            'gratificacion'=>$this->request->getVar('gratificacion'),
            'factor_he'=>$this->request->getVar('factor_he'),
            'colacion'=>$this->request->getVar('colacion'),
            'movilizacion'=>$this->request->getVar('movilizacion'),
            'dias_vacaciones'=>$this->request->getVar('dias_vacaciones'),
            'finiquito_causa'=>$this->request->getVar('finiquito_causa'),
            'fecha_finiquito'=>$this->request->getVar('fecha_finiquito'),
            'monto_aviso'=>$this->request->getVar('monto_aviso'),
            'monto_indemnizacion'=>$this->request->getVar('monto_indemnizacion'),
            'monto_vacaciones'=>$this->request->getVar('monto_vacaciones'),
            'id_empleado'=>$id
        ];
        if ($contrato!=null) {
            $contratoModel->where('id_empleado');
            $contratoModel->update($input_contrato);
        }else{
            $contratoModel->save($data);
        }   
        return redirect()->back();
    }
        
}

