<?php
namespace App\Models;
use CodeIgniter\Model;

class ubicacionModel extends Model{
    protected $table='direccion';
    protected $primaryKey='id';
    protected $allowedFields=['CodigoPostal','ciudad','barrio','calle','altura','provincia_id','created_at'];

    public function ubicacionID($id){
        return $this->where('id',$id);
    }
    public function readUbicaciones(){
        return $this->findAll();
        
    }
    public function updateDireccion($ubicacionId, $data){
        $query=$this->db->table('direccion');
        $query->set($data);
        $query->where('id', $ubicacionId);
        $query->update();
    }
}


?>