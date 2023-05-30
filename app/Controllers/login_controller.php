<?php
namespace App\Controllers;
Use App\Models\formModel;
Use CodeIgniter\Controller;

class login_controller extends Controller{
    public function index(){
        $data['titulo']='log in';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('back/usuario/logeo_view.php');
        echo view('front/footer_view.php');
    }
    public function auth(){
        $session=session();
        $model=new formModel();
        //datos del form
        $email=$this->request->getVar('email');
        $password=$this->request->getVar('pass');
        $data=$model->where('email',$email)->first();
        
        if($data){
            $pass=$data['pass'];
            $ba=$data['baja'];  
            if($ba=='SI'){
                $session->setFlashdata('msg','usuario dado de baja');
                return redirect()->to('/log_in');
            }
            $verify_pass=password_verify($password,$pass);
            if($verify_pass){
                $ses_data=[
                    'id'=>$data['id'],
                    'nombre'=>$data['nombre'],
                    'apellido'=>$data['apellido'],
                    'email'=>$data['email'],
                    'usuario'=>$data['usuario'],
                    'perfil_id'=>$data['perfil_id'],
                    'logged_in'=>TRUE
                    ];
                $session->set($ses_data);
                $session->setFlashdata('msg', 'user logged successfully. Hi '. session()->get('nombre'));
                return redirect()->to('/log_in');

            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/log_in');
            }
        }else{
            $session->setFlashdata('msg', 'email does not exits.');
            return redirect()->to('/log_in');
        }
    }
    public function logout(){
        $session=session();
        //$session()->set('logged_in',false);
        $session->destroy();

        return redirect()->to('/');
    } 
}



?>