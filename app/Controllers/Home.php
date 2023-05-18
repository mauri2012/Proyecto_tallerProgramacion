<?php

namespace App\Controllers;

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
        $data['titulo']='contacto';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/contacto.php');
        echo view('front/footer_view.php');
    }
    public function terminos_y_usos(){
        $data['titulo']='contacto';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/terminos_y_usos.php');
        echo view('front/footer_view.php');
    }
    public function producto(){
        $data['titulo']='producto';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/producto.php');
        echo view('front/footer_view.php');
    }
    public function carrito(){
        $data['titulo']='sign up';
        echo view('front/head_view.php',$data);
        echo view('front/nav_view.php');
        echo view('front/shopping_cart.php');
        echo view('front/footer_view.php');
    }
}
?>