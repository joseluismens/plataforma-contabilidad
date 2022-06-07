<?php 
namespace App\Models;

use CodeIgniter\Model;

class EmpresaModel extends Model{
    protected $table      = 'empresas';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields    = ['nombre','razon_social','rut','giro','email','rep_legal','rut_rep_legal','rep_legal2','rut_rep_legal2','direccion','comuna','ciudad','telefono','mutual','factor_mutual','caja_compensacion','logo', 
    ];
     protected $returnType   ='App\Entities\Empresa';
     protected $useTimestamps=false;
    
     public function empresasAsignadas(){
        $db = db_connect();
        $session = session();
        $id = $session->get('id');
        $builder =$db->table('empresas');
        $builder->select('*');
        $builder->join('users_empresas', 'users_empresas.empresa_id = empresas.id');
        $query = $builder->where('user_id',$id)->get()->getResultArray();

        return $query;

    }
    public function asignarEmpresa($id){
        $db = db_connect();
        $session = session();
        $user_id = $session->get('id');
        $builder =$db->table('users_empresas');
        $data = [
            'user_id'=>$user_id,
            'empresa_id'=>$id
        ];
        $query= $builder->insert($data);
        return true;
    }
}