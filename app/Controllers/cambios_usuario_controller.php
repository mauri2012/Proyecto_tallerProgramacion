<?php
namespace App\Controllers;
Use App\Models\formModel;
use CodeIgniter\Controller;
use CodeIgniter\Validation\Validation;

class cambios_usuario_controller extends Controller{
    public function __construct(){
        helper(['form', 'url','validation']);
       
    }

    public function formValidation(){
        
        $input = $this->validate([
            'nombre'    => 'required|max_length[20]',
            'apellido'  => 'required|min_length[3]|max_length[12]',
            'email'     => 'required|max_length[20]',
            'usuario'   => 'required|max_length[10]',
            'perfil_id' => 'required|max_length[1]',
            'baja'      => 'required|max_length[2]'
        ]);
  
       $formModel = new formModel();
       $id=$this->request->getVar('id');
        if (!$input) {

            $data['titulo']='modificar usuario'; 
            $dato['datos']=$formModel->findID($id);
            echo view('front/head_view',$data);
            echo view('front/nav_view');
            echo view('back/usuario/modificar_usuario.php',$dato , ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            
            
                $data=[
                    'nombre' => $this->request->getVar('nombre'),
                    'apellido'=> $this->request->getVAr('apellido'),
                    'email'=> $this->request->getVar('email'),
                    'usuario'=> $this->request->getVar('usuario'),
                    'perfil_id'=> $this->request->getVar('perfil_id'),
                    'baja'=> $this->request->getVar('baja'),
            
                ];
                
                
                
                $formModel->updateUser($id,$data);  
                               
                session()->setFlashdata('success', 'Producto actualizado con exito');
            }
            return $this->response->redirect(site_url('/userview'));

        }
    
}