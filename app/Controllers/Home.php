<?php

namespace App\Controllers;
Use App\Models\consultasModel;
class Home extends BaseController
{
    public function index(){
        $data['titulo']='Zapateria Lezana';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/pagina_principal.php');
        echo view('front/footer_view.php');
    }
    public function quienes_somos(){
        $data['titulo']='¿quienes somos?';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/quienessomos.php');
        echo view('front/footer_view.php');
    }
    public function contacto(){
        $unaConsulta=new consultasModel();
        $data['titulo']='contacto';
        $data['consultas']=$unaConsulta->readConsultas();
        
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/contacto.php');
        echo view('front/footer_view.php');
    }
    public function cambioContacto(){
        $id=$this->request->getVar('id');
        $cambio=$this->request->getVar('cambio');
        
        $unaConsulta=new consultasModel();
        $unaConsulta->cambio($id,$cambio);
        return redirect()->to('/contacto');
    }
    public function terminos_y_usos(){
        $data['titulo']='contacto';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/terminos_y_usos.php');
        echo view('front/footer_view.php');
    }


}
?>