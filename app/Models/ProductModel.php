<?php
namespace App\Models;
use CodeIgniter\Model;


class ProductModel extends Model{

    protected $table='productos';
    protected $primaryKey='id';
    protected $allowedFields=['nombre_producto','imagen','categoria_id','precio','precio_venta','stock','stock_min','eliminar','created_at'];

    public function LeerProductos(){          
        return $this->findAll();
    }
    public function findID($id){
        return $this->where('id',$id)->first();
    }
    public function eliminados(){
        $this->select('p.id,p.nombre_producto,p.precio_venta,p.stock,p.stock_min,p.eliminar,p.imagen,c.descripcion');
        $this->from('productos p');
        $this->join('categorias c','p.categoria_id=c.id');
        $this->groupBy('p.id');  
        $this->where('p.eliminar','SI');
        return $this->get()->getResultArray();
    }
    public function CambioEliminar($id,$cambiarValor){
        $query=$this->db->table('productos');
        $query->set('eliminar',$cambiarValor);
        $query->where('id',$id);
        $query->update();
    }
    public function updateProduct($productId, $data){
        $query=$this->db->table('productos');
        $query->set($data);
        $query->where('id', $productId);
        $query->update();
    }
    public function laCategoria(){
        $this->select('p.id,p.nombre_producto,p.precio_venta,p.stock,p.stock_min,p.eliminar,p.imagen,c.descripcion');
        $this->from('productos p');
        $this->join('categorias c','p.categoria_id=c.id');
        $this->groupBy('p.id');      
        return $this->get()->getResultArray();
    }


}



?>