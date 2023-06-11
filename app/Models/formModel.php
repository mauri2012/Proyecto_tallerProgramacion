<?php
namespace App\Models;
use CodeIgniter\Model;

class formModel extends Model{

    protected $table='usuarios';
    protected $primaryKey='id';
    protected $allowedFields=['nombre','apellido','email','usuario','pass','perfil_id','baja','direccion_id','created_at'];

    public function readUsuarios(){
        $this->select('u.id,u.perfil_id ,u.nombre, u.apellido, u.email ,u.usuario, u.baja, p.descripcion,pr.provincia')
        ->from('usuarios u')
        ->join('perfiles p','u.perfil_id=p.id')
        ->join('direccion d','u.direccion_id=d.id')
        ->join('provincia pr','d.provincia_id=pr.id')
        ->groupBy('u.id');
        return $this->get()->getResultArray();
   
}
public function readUsuariosDireccion($id){
    $this->select('u.id,u.perfil_id ,u.nombre, u.apellido, u.email ,u.usuario, u.baja,u.direccion_id, d.provincia_id,d.CodigoPostal,d.ciudad,d.barrio,d.calle,d.altura,p.provincia')
    ->from('usuarios u')
    ->join('direccion d','u.direccion_id=d.id')
    ->join('provincia p','d.provincia_id=p.id')
    ->groupBy('u.id')
    ->where('u.id',$id);
    return $this->find();
//para hacer: preguntar a chatgpt porque no funciona esta funcion si la analoga en prodyctos si 
}
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

