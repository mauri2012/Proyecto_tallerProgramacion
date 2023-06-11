<?php
namespace App\Controllers;
Use App\Models\formModel;
Use App\Models\perfilesModel;
Use App\Models\provinciaModel;
Use App\Models\categoriaModel;
Use CodeIgniter\Controller;

class admin_controller extends Controller{
    public function __construct(){
        helper(['form', 'url']);
 }
    public function index(){
        $unModelo=new formModel();
        $data['users']=$unModelo->readUsuarios();
        
        $data['titulo']='admin controller';
        $data['bandera']=true;
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/usuario/users_view.php');
        echo view('front/footer_view.php');
    }
    public function userBaja(){
        $unModelo=new formModel();
        $data["users"]=$unModelo->bajados();
        $data['bandera']=$this->request->getVar('bandera');
        $data['titulo']='admin controller';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/usuario/users_view.php');
        echo view('front/footer_view.php');
    }

    public function cambiarValorNO(){
        $unModelo=new formModel();
        $id = $this->request->getVar('id');
        $unModelo->actualizarBaja($id ,'NO');

        return redirect()->to('/userview');
    }
    public function cambiarValorSI(){
        $unModelo=new formModel();
        $id = $this->request->getVar('id');
        $unModelo->actualizarBaja($id ,'SI');

        return redirect()->to('/userview');
    }
    public function CambiarPerfil(){
        $unModelo=new formModel();
        $id = $this->request->getVar('id');
        if($this->request->getVar('perfil_id')==2){
            $unModelo->actualizarPerfil($id ,1);
        }else{
            $unModelo->actualizarPerfil($id ,2);
        }

        return redirect()->to('/userview');
    }
    public function userEdit(){
        $unModelo=new formModel();
        $unPerfil=new perfilesModel();
        $unaProvincia=new provinciaModel();
        $id=$this->request->getVar('id');
        $data['titulo']='modificar usuario';
        $data['datos']=$unModelo->readUsuariosDireccion($id);
       // dd($id); readUsuariosDireccion
        $dato['perfiles']=$unPerfil->leerProductos();
        $dato['provincias']=$unaProvincia->readProvincias();
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/usuario/modificar_usuario.php', $dato);
        echo view('front/footer_view.php');
    }
    public function formProvincia(){
        $data['titulo']='formulario Provincia';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/usuario/formProvincia.php');
        echo view('front/footer_view.php');
    }
    public function agregarProvincia(){
        $input = $this->validate([
            'provincia'    => 'required|min_length[4]|max_length[15]',
        ]);
        $unaProvincia=new provinciaModel();
        $provincia=$this->request->getVar('provincia');
        if (!$input) {
            $data['titulo']='formulario Provincia';
            echo view('front/head_view.php',$data);
            echo view('front/nav_view.php');
            echo view('back/usuario/formProvincia.php',['validation' => $this->validator]);
            echo view('front/footer_view.php');
        }else{
            $unaProvincia->save(['provincia'=>$provincia]);
            session()->setFlashdata('success','provincia ingresada con exito');
            return redirect()->to('/userview');
        }
    }

    public function formCategoria(){
        $data['titulo']='formulario Categoria';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/formCategoria.php');
        echo view('front/footer_view.php');
    }
    public function agregarCategoria(){
        $input = $this->validate([
            'descripcion'    => 'required|min_length[4]|max_length[20]',
        ]);
        $unaCategoria=new categoriaModel();
        $categoria=$this->request->getVar('descripcion');
        if (!$input) {
            $data['titulo']='formulario Categoria';
            echo view('front/head_view.php',$data);
            echo view('front/nav_view.php');
            echo view('back/formCategoria.php',['validation' => $this->validator]);
            echo view('front/footer_view.php');
        }else{
            $unaCategoria->save(['descripcion'=>$categoria]);
            session()->setFlashdata('success','provincia ingresada con exito');
            return redirect()->to('/productview');
        }
    }
      
}



?>