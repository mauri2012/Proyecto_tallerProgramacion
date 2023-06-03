<?php
namespace App\Models;
use CodeIgniter\Model;

class categoriaModel extends Model{
    protected $table='categorias';
    protected $primaryKey='id';
    protected $allowedFields=['descripcion'];

    public function categoria($id){
        return $this->where('id',$id);
    }
    public function readCategorias(){
        return $this->findAll();
    }
}


?>