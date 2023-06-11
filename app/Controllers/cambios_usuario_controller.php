<?php
namespace App\Controllers;
Use App\Models\formModel;
use CodeIgniter\Controller;
use CodeIgniter\Validation\Validation;
Use App\Models\perfilesModel;
Use App\Models\ubicacionModel;
Use App\Models\provinciaModel;
class cambios_usuario_controller extends Controller{
    public function __construct(){
        helper(['form', 'url','validation']);
       
    }

    public function formValidation(){
        
        $input = $this->validate([
            'nombre'    => 'required|max_length[20]',
            'apellido'  => 'required|min_length[3]|max_length[12]',
            'email'     => 'required|max_length[26]',
            'usuario'   => 'required|max_length[10]',
            'perfil_id' => 'required|max_length[1]',
            'baja'      => 'required|max_length[2]',
            'CodigoPostal'  => 'required|min_length[3]',
            'ciudad'  => 'required|min_length[3]',
            'barrio'  => 'required|min_length[3]',
            'calle'  => 'required|min_length[3]',
            'altura' => 'numeric'
        ]);
  
       $formModel = new formModel();
       $unaDireccion=new ubicacionModel();
       $id=$this->request->getVar('id');
       $direccion_id=$this->request->getVar('direccion_id');
        
       if (!$input) {
      
            $unPerfil=new perfilesModel();
            $unaProvincia=new provinciaModel();
            $data['titulo']='modificar usuario'; 
            $data['datos']=$formModel->readUsuariosDireccion($id);
            $data['perfiles']=$unPerfil->leerProductos();
            
            $data['provincias']=$unaProvincia->readProvincias();
            echo view('front/head_view',$data);
            echo view('front/nav_view');
            echo view('back/usuario/modificar_usuario.php', ['validation' => $this->validator]);
            echo view('front/footer_view');
       
        } else {
            
                $dataUbicacion=[
                    'CodigoPostal' => $this->request->getVar('CodigoPostal'),
                    'ciudad'=> $this->request->getVar('ciudad'),
                    'barrio'=> $this->request->getVar('barrio'),
                    'calle'=> $this->request->getVar('calle'),
                    'altura'=> $this->request->getVar('altura'),
                    'provincia_id' => $this->request->getVar('provincia_id'),    
                ];
                $dataUser=[
                    'nombre' => $this->request->getVar('nombre'),
                    'apellido'=> $this->request->getVAr('apellido'),
                    'email'=> $this->request->getVar('email'),
                    'usuario'=> $this->request->getVar('usuario'),
                    'perfil_id'=> $this->request->getVar('perfil_id'),
                    'baja'=> $this->request->getVar('baja'),
                    'direccion_id' => $direccion_id,
                ];
                //dd($dataUbicacion);
                $unaDireccion->updateDireccion($direccion_id,$dataUbicacion);
                //dd($dataUser);
                   
                $formModel->updateUser($id,$dataUser);  
                               
                session()->setFlashdata('success', 'Usuario actualizado con exito');
            }
            if(session()->get('perfil_id')==1){
            return $this->response->redirect(site_url('/userview'));
            }else{
                return $this->response->redirect(site_url(''));
            }
        }
    
}