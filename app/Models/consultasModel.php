<?php
namespace App\Models;
use CodeIgniter\Model;

class consultasModel extends Model{
    protected $table='consultas';
    protected $primaryKey='id';
    protected $allowedFields=['Asunto','descripcion','Email'];

    public function readConsultas(){
        return $this->findAll();
    }
    public function cambio($id,$leido){
        if($leido=="SI"){
            $cambio='NO';
        }else{
            $cambio='SI';
        }
        $data=['leido' => $cambio];



        $this->db->table('consultas')
                ->where('id',$id)        
                ->update($data);
        
    }

}
