<?php
namespace App\Models;
use CodeIgniter\Model;

class detallesVentaModel extends Model{
    protected $table='ventas_detalle';
    protected $primaryKey='id';
    protected $allowedFields=['venta_id','producto_id','cantidad','precio'];

    public function readDetalles($id,$ventaid){
        $this->from('ventas_detalle d')
            ->join('ventas_cabecera c','d.venta_id=c.id')
            ->join('productos p','p.id=d.producto_id')
            ->groupBy('d.id')
            ->where('c.usuario_id',$id )
            ->where('d.venta_id',$ventaid);
        return $this->get()->getResultArray();
    }
    public function readDetallesAdmin($ventaid){
        $this->from('ventas_detalle d')
            ->join('ventas_cabecera c','d.venta_id=c.id')
            ->join('productos p','p.id=d.producto_id')
            ->where('d.venta_id',$ventaid)
            ->groupBy('d.id');
        return $this->get()->getResultArray();
    }
    public function readAll($id){
        $this->SELECT('*')
        ->FROM('ventas_detalle d')
        ->join('ventas_cabecera  c','d.venta_id=c.id')
        ->where('c.usuario_id',$id)
      
        ->groupBy('c.id');
        return $this->get()->getResultArray();
    }
}
?>