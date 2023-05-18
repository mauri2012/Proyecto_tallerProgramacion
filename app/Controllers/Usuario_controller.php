<?php
namespace App\Controllers;
Use App\Models\formModel;
use CodeIgniter\Controller;

class Usuario_controller extends Controller{

	public function __construct(){
           helper(['form', 'url']);
	}
    public function create() {
        
         $dato['titulo']='Registro'; 
         echo view('front/head_view',$dato);
         echo view('front/nav_view');
         echo view('back/usuario/sign_up');
         echo view('front/footer_view');
      }
      
    public function formValidation() {
             
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario'  => 'required|min_length[3]',
            'pass'     => 'required|min_length[3]|max_length[15]',
            'passR'    => 'required|matches[pass]'
        ],
        
       );
        $formMu = new formModel();
     
        if (!$input) {
               $data['titulo']='Registro'; 
                echo view('front/head_view',$data);
                echo view('front/nav_view');
                //echo view('back/usuario/registrarse', ['validation' => $this->validator]);
                echo view('back/usuario/sign_up', ['validation' => $this->validator]);
                echo view('front/footer_view');

        } else {
          
            $formMu->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido'=> $this->request->getVar('apellido'),
                'email'=> $this->request->getVar('email'),
                'usuario'=> $this->request->getVar('usuario'),

                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                
              //  password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido.
            ]);  
              //return $this->response->redirect(site_url(''));

            // Flashdata funciona solo en redirigir la función en el controlador en la vista de carga.
               session()->setFlashdata('success', 'Usuario registrado con exito');
               return $this->response->redirect(site_url('/sign_up'));
      
        }
    }
}
