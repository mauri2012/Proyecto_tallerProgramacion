<?php
namespace App\Controllers;
Use App\Models\ProductModel;
Use App\Models\categoriaModel;
use CodeIgniter\Controller;

class producto_controller extends Controller{
    public function __construct(){
    helper('form');
    }
    public function index(){
        $unModelo=new ProductModel();
        $flag=$this->request->getVar('bandera');
        //$data["products"]=$unModelo->leerProductos();
        if($flag){
            $data['products']=$unModelo->eliminados() ;
        }else{
            $data["products"]=$unModelo->laCategoria();            
        }
        $data['bandera']=$flag;
        $data['titulo']='admin controller';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/producto_view.php',$data);
        echo view('front/footer_view.php');
    }
 
    public function EliminarNO(){
        $unModelo=new ProductModel();
        $id=$this->request->getVar('id');
        $unModelo->CambioEliminar($id,'SI');
        return redirect()->to('productoview');
    }
    public function EliminarSI(){
        $unModelo=new ProductModel();
        $id=$this->request->getVar('id');
        $unModelo->CambioEliminar($id,'NO');
        return redirect()->to('productoview');
    }
    public function productEdit(){
        $unModelo=new ProductModel();
        $id=$this->request->getVar('id');
        $data['titulo']='modificar producto';
        $dato['datos']=$unModelo->findID($id);
        
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/modificar_producto.php', $dato);
        echo view('front/footer_view.php');
    }

    public function producto(){
        $unProducto=new ProductModel();
        $data['titulo']='producto';
        $data['products']=$unProducto->LeerProductos();
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/producto.php',$data);
        echo view('front/footer_view.php');
    }

}









?>