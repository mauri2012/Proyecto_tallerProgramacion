<?php
namespace App\Models;
use CodeIgniter\Model;

class detallesVentaModel extends Models{
    protected $tabla='ventas_detalle';
    protected $primaryKey='id';
    protected $allowedFields=['venta_id','producto_id','total_venta'];

}
?>