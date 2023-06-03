<?php
namespace App\Controllers;
Use App\Models\cabeceraVentaModel;
Use App\Models\detallesVentaModel;
use CodeIgniter\Controller;
class carrito_controller extends BaseController{


    public function __contruct(){
        helper(['form','url','cart']);

        $session=session();
        $cart=\Config\Services::cart();
        $cart->contents();
    }

    public function add(){
        $cart= \Config\Services::Cart();
        $request= \Config\Services::request();

        $cart->insert(array(
            'id'=>$request->getPost('id'),
            'qty'=>1,
            'price'=>$request->getPost('precio'),
            'name'=>$request->getPost('nombre'),
        ));
        
        return redirect()->to('producto');
    }
    public function remove(){
        $rowid=$this->request->getVar('rowid');

        $cart= \Config\Services::Cart();
        $request= \Config\Services::request();
        if($rowid=="all"){
            $cart->destroy();
        }else{
            $cart->remove($rowid);
        }
        return redirect()->to('carro');
    }
    public function borrar_carrito(){
        $cart= \Config\Services::Cart();

        $cart->destroy();
        return redirect()->to('carro'); 
    }
}







?>