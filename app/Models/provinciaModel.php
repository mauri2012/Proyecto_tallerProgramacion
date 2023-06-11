<?php
namespace App\Models;
use CodeIgniter\Model;

class provinciaModel extends Model{
    protected $table='provincia';
    protected $primaryKey='id';
    protected $allowedFields=['provincia'];

    public function provinciaID($id){
        return $this->where('id',$id);
    }
    public function readProvincias(){
        return $this->findAll();
        
    }
}


?>