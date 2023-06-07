<?php
namespace App\Controllers;
Use App\Models\ProductModel;
use CodeIgniter\Controller;
use CodeIgniter\Validation\Validation;
use App\Models\categoriaModel;
class registrar_producto_controller extends Controller{
    public function __construct(){
        helper(['form', 'url','validation']);
       
    }
    public function create(){
        $unaCategoria=new categoriaModel();
        $data['categorias']=$unaCategoria->readCategorias();
        $data['titulo']='registrar producto';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/registro_producto.php');
        echo view('front/footer_view.php');
    }
    public function formValidation(){

        $input = $this->validate([
            'nombre_producto'=> 'required|max_length[20]',
            'imagen'         => 'uploaded[imagen]',
            'categoria_id'   => 'required|numeric|max_length[10]',
            'precio'         => 'required|numeric',
            'precio_venta'   => 'required|min_length[3]|max_length[15]',
            'stock'          => 'required|is_natural',
            'stock_min'      => 'required|is_natural'
        ]);
        
       $formModel = new ProductModel();
    
        if (!$input) {
            $data['titulo']='Alta Producto'; 
            echo view('front/head_view',$data);
            echo view('front/nav_view');
            echo view('back/registro_producto.php', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $img=$this->request->getFile('imagen');
            if(!$img->hasMoved() && $img->isValid()){
                $nombre_aleatorio=$img->getRandomName();
                $img->move(ROOTPATH. 'assets/uploads', $nombre_aleatorio);
                $formModel->save([
                    'nombre_producto' => $this->request->getVar('nombre_producto'),
                    'imagen'=> $img->getName(),
                    'categoria_id'=> $this->request->getVar('categoria_id'),
                    'precio'=> $this->request->getVar('precio'),
                    'precio_venta'=> $this->request->getVar('precio_venta'),
                    'stock'=> $this->request->getVar('stock'),
                    'stock_min'=> $this->request->getVar('stock_min'),
                    'descripcion' => $this->request->getVar('descripcion'), 
                ]);  
            
                session()->setFlashdata('success', 'Producto registrado con exito');
            }
            return $this->response->redirect(site_url('/productoview'));

        }
    }
}









?>