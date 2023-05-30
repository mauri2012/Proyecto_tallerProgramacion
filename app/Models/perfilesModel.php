<?php
namespace App\Models;
use CodeIgniter\Model;

class categoriaModel extends Models{
    protected $tabla='categoria';
    protected $primaryKey='id';
    protected $allowedFields=['descripcion'];

}
?>