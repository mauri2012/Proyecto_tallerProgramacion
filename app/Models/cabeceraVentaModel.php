<?php
namespace App\Models;
use CodeIgniter\Model;

class cabeceraVentaModel extends Model{
    protected $table='ventas_cabecera';
    protected $primaryKey='id';
    protected $allowedFields=['fecha','usuario_id','total_venta'];


    public function readCabecera(){
        $this->select('c.id,c.fecha,c.total_venta,u.nombre')->from('ventas_cabecera c')->join('usuarios u','c.usuario_id=u.id')->groupBy('c.id');
        return $this->where('c.usuario_id',session()->get('id'))->findAll();
    }
    public function readCabeceraAdmin(){
        $this->select('c.id,c.fecha,c.total_venta,u.nombre')->from('ventas_cabecera c')->join('usuarios u','c.usuario_id=u.id')->groupBy('c.id');
        return $this->get()->getResultArray();
    }

}



?>