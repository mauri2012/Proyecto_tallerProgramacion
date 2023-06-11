<?php
namespace App\Controllers;
Use App\Models\ProductModel;
Use App\Models\categoriaModel;
Use App\Models\provinciaModel;

use CodeIgniter\Controller;
use CodeIgniter\Validation\Validation;

class actualizar_producto_controller extends Controller{
    public function __construct(){
        helper(['form', 'url','validation']);
       
    }

    public function formValidation(){
        
        $input = $this->validate([
            'nombre_producto'=> 'required|max_length[50]',
            'imagen'         => 'uploaded[imagen]',
            'categoria_id'   => 'required|numeric|max_length[10]',
            'precio'         => 'required|numeric',
            'precio_venta'   => 'required|min_length[3]|max_length[15]',
            'stock'          => 'required|is_natural',
            'stock_min'      => 'required|is_natural'
        ]);
       // session()->setFlashdata('success', 'Producto NO actualizado con exito a');
       $formModel = new ProductModel();
       $id=$this->request->getVar('id');
        if (!$input) {
            $unaCategoria=new categoriaModel();
   
            $data['titulo']='Alta Producto'; 
            $dato['datos']=$formModel->findID($id);
            $data['categorias'] = $unaCategoria->readCategorias(); 
    
            echo view('front/head_view',$data);
            echo view('front/nav_view');
            echo view('back/modificar_producto.php',$dato , ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
          
            $img=$this->request->getFile('imagen');
            
            if(!$img->hasMoved() && $img->isValid()){
                $nombre_aleatorio=$img->getRandomName();
                $img->move(ROOTPATH. 'assets/uploads', $nombre_aleatorio);
                $data=[
                    'nombre_producto' => $this->request->getVar('nombre_producto'),
                    'imagen'=> $img->getName(),
                    'categoria_id'=> $this->request->getPost('categoria_id'),
                    'precio'=> $this->request->getVar('precio'),
                    'precio_venta'=> $this->request->getVar('precio_venta'),
                    'stock'=> $this->request->getVar('stock'),
                    'stock_min'=> $this->request->getVar('stock_min'), 
                    'descripcion' =>$this->request->getVar('descripcion'),
                ];
                
                
                //$formModel->findID($id);
                $formModel->updateProduct($id,$data);  
                               
                session()->setFlashdata('success', 'Producto actualizado con exito');
            }
            return $this->response->redirect(site_url('/productoview'));

        }
    }
}