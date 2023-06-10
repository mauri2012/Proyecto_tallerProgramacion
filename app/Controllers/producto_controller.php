<?php
namespace App\Controllers;
Use App\Models\ProductModel;
Use App\Models\categoriaModel;
Use App\Models\formModel;
Use App\Models\detallesVentaModel;
Use App\Models\cabeceraVentaModel;
Use App\Models\consultasModel;
use CodeIgniter\Controller;

class producto_controller extends Controller{
    public function __construct(){
    helper('form','session');
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
        $unaCategoria=new categoriaModel();

        $id=$this->request->getVar('id');

        $data['titulo']='modificar producto';
        $dato['datos']=$unModelo->findID($id);
        $dato['categorias']=$unaCategoria->readCategorias();

        //dd($dato['categorias']);

        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/modificar_producto.php', $dato);
        echo view('front/footer_view.php');
    }

    public function producto(){
        $unaCategoriaId=$this->request->getVar('categoria');
    
        $unProducto=new ProductModel();
        $unUsuario=new formModel();
        $unaCategoria=new categoriaModel();
        $data['titulo']='producto';
  
        $data['products']=$unProducto->LeerProductos();

        $data['categorias']=$unaCategoria->readCategorias();
        $data['categoriaChoosen']=$unaCategoriaId;
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/producto.php',$data);
        echo view('front/footer_view.php');
    }
    public function carrito_view(){
        $unaVenta=new detallesVentaModel(); 
        $data['titulo']='cart';
        $data['products']=$unaVenta->readAll(session()->get('id'));
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/cart.php');
        echo view('front/footer_view.php');
    }
    public function todasVentas(){
        $unaVenta=new cabeceraVentaModel(); 
        $data['titulo']='shopping cart';
  
        if(session()->get('perfil_id')!=1){
            $data['products']=$unaVenta->readCabecera();
        }else{
            $data['products']=$unaVenta->readCabeceraAdmin();
        }
        
 
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/shopping_cart.php');
        echo view('front/footer_view.php');
    }
    public function detalle_view(){
        $unaVenta=new detallesVentaModel(); 
        
        $ventaid=$this->request->getVar('venta_id');

        $data['titulo']='detalles';
        if(session()->get('perfil_id')==1){
            $data['products']=$unaVenta->readDetallesAdmin($ventaid);
       
        }else{
            $data['products']=$unaVenta->readDetalles(session()->get('id'),$ventaid);
        }
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/shopping_cart_detalles.php');
        echo view('front/footer_view.php');
    }
    public function consultas(){
        $input = $this->validate([
            'Asunto'=> 'required|max_length[20]',
            'descripcion'         => 'required|min_length[5]',
            'Email'   => 'required'
        ]);
      
       $unaConsulta = new consultasModel();
        
        if (!$input) {
            $data['titulo']='Contacto'; 
            echo view('front/head_view',$data);
            echo view('front/nav_view');
            echo view('front/contacto.php', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {

    
                $unaConsulta->save([
                    'Asunto'     => $this->request->getVar('Asunto'),
                    'descripcion'=> $this->request->getVar('descripcion'),
                    'Email'      => $this->request->getVar('Email'),
                ]);  
                
                session()->setFlashdata('success', 'consulta registrada con exito');
            
            return redirect()->to('/contacto');

        }
            
    }
}









?>