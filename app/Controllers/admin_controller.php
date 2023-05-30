<?php
namespace App\Controllers;
Use App\Models\formModel;
Use CodeIgniter\Controller;

class admin_controller extends Controller{
    public function __construct(){
        helper(['form', 'url']);
 }
    public function index(){
        $unModelo=new formModel();
        $data["users"]=$unModelo->readUsers();
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
        $id=$this->request->getVar('id');
        $data['titulo']='modificar usuario';
        $dato['datos']=$unModelo->findID($id);
        
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/usuario/modificar_usuario.php', $dato);
        echo view('front/footer_view.php');
    }
      
}



?>