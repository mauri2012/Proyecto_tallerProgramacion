<?php
namespace App\Controllers;
Use App\Models\cabeceraVentaModel;
Use App\Models\detallesVentaModel;
Use App\Models\ProductModel;
use CodeIgniter\Controller;
class lista_controller extends BaseController{


    public function __contruct(){
        helper(['form','url','cart']);


    }

    public function add(){
        $cart=\Config\Services::cart();
        $request=\Config\Services::request();

        $ventaCabecera=new cabeceraVentaModel();
        $ventaDetalle=new detallesVentaModel();
        $unProducto=new ProductModel();

        $productos=$cart->contents();
        $montoTotal=0;
        foreach($productos as $producto){
            $montoTotal=$producto['price'] * $producto['qty']+$montoTotal ;
        }
        
        $idCabecera=$ventaCabecera->insert([
            'usuario_id'=> session()->get('id'),
            'total_venta' => $montoTotal
        ]);
        
        foreach($productos as $producto){
            $ventaDetalle->insert([
                'venta_id'=> $idCabecera,
                'producto_id' => $producto['id'],
                'cantidad' =>$producto['qty'],
                'precio' => $producto['price']
            ]);

            $stockFinal=$producto['stock']-$producto['qty'];
            $unProducto->update($producto['id'],['stock' => $stockFinal ]);
        }
        
        //$cart->destroy();
        return redirect()->to('shopping');
    }
}







?>