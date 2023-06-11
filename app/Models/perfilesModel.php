<?php
namespace App\Models;
use CodeIgniter\Model;

class perfilesModel extends Model{
    protected $table='perfiles';
    protected $primaryKey='id';
    protected $allowedFields=['descripcion'];

    public function LeerProductos(){          
        return $this->findAll();
    }
    public function findID($id){
        return $this->where('id',$id)->first();
    }
}
?>