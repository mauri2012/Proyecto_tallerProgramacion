<?php
namespace App\Models;
use CodeIgniter\Model;

class categoriaModel extends Model{
    protected $tabla='categoria';
    protected $primaryKey='id';
    protected $allowedFields=['descripcion'];

    public function categoria($id){
        return $this->where('id',$id);
    }
}


?>