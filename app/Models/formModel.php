<?php
namespace App\Models;
use CodeIgniter\Model;

class formModel extends Model{

    protected $table='usuarios';
    protected $primaryKey='id';
    protected $allowedFields=['nombre','apellido','email','usuario','pass','perfil_id','baja','created_at'];


    public function readUSers(){
        return $this->findAll();
    }
    public function bajados(){
        $this->select('*');
        $this->where('baja','SI');
        return $this->get()->getResultArray();
    }
    public function findID($id){
        return $this->where('id',$id)->first();
    }
    public function actualizarBaja($id,$nuevoValor)
    {
        $query = $this->db->table('usuarios');
        $query->set('baja', $nuevoValor);
        $query->where('id', $id);
        $query->update();
       // $this->db->getCompiledUpdate();
    }
    public function actualizarPerfil($id,$nuevoValor)
    {
        $query = $this->db->table('usuarios');
        $query->set('perfil_id', $nuevoValor);
        $query->where('id', $id);
        $query->update();
       // $this->db->getCompiledUpdate();
    }
    public function updateUser($productId, $data){
        $query=$this->db->table('usuarios');
        $query->set($data);
        $query->where('id', $productId);
        $query->update();
    }
}

 





?>

