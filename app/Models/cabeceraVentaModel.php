<?php
namespace App\Models;
use CodeIgniter\Model;

class cabeceraVentaModel extends Models{
    protected $tabla='ventas_cabecera';
    protected $primaryKey='id';
    protected $allowedFields=['fecha','usario_id','total_venta'];

}
?>