<?php
namespace App\Models;
use CodeIgniter\Model;

class formModel extends Model{

    protected $table='usuarios';
    protected $primaryKey='id';
    protected $allowedFields=['nombre','apellido','email','usuario','pass','perfil_id','baja','created_at'];


}







?>

