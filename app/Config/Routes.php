<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/quienessomos','Home::quienes_somos');
$routes->get('/contacto','Home::contacto');
$routes->get('/terminos_usos','Home::terminos_y_usos');


//registro
$routes->get('/sign_up', 'Usuario_controller::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');
//log in
$routes->get('/log_in','login_controller');
$routes->post('/enviar-login','login_controller::auth');
$routes->get('/log_out','login_controller::logout');
//admin
$routes->get('/userview','admin_controller',['filter'=>'auth']);
$routes->get('/bajaActualizarNO','admin_controller::cambiarValorNO',['filter'=>'auth']);
$routes->get('/bajaActualizarSI','admin_controller::cambiarValorSI',['filter'=>'auth']);
$routes->get('/perfilActualizar','admin_controller::cambiarPerfil',['filter'=>'auth']);
$routes->get('/editarUsuario','admin_controller::userEdit',['filter'=>'auth']);
$routes->post('/cambios-form','cambios_usuario_controller::formValidation',['filter'=>'auth']);
$routes->get('/usuarios_baja','admin_controller::userBaja',['filter'=>'auth']);
//producto
$routes->get('/producto','producto_controller::producto',['filter'=>'auth']);
$routes->get('/productoview','producto_controller',['filter'=>'auth']);
$routes->get('/productRegister','registrar_producto_controller::create',['filter'=>'auth']);
$routes->post('/validarProducto','registrar_producto_controller::formValidation',['filter'=>'auth']);
$routes->post('/actualizarProducto','actualizar_producto_controller::formValidation',['filter'=>'auth']);
$routes->get('/CambiarEliminarNO','producto_controller::EliminarNO',['filter'=>'auth']);
$routes->get('/CambiarEliminarSI','producto_controller::EliminarSI',['filter'=>'auth']);
$routes->get('/editarProducto','producto_controller::productEdit',['filter'=>'auth']);
//carrito
$routes->get('/carrito','lista_controller::add',['filter'=>'auth']);
$routes->get('/shopping','producto_controller::todasVentas',['filter'=>'auth']);
$routes->get('/carro','producto_controller::carrito_view',['filter'=>'auth']);
$routes->post('/carrito_agrega','carrito_controller::add',['filter'=>'auth']);
$routes->get('/eliminar-carrito','carrito_controller::remove',['filter'=>'auth']);
$routes->get('/detalleVenta','producto_controller::detalle_view',['filter'=>'auth']);
$routes->get('/borrar','carrito_controller::borrar_carrito',['filter'=>'auth']);
$routes->get('/unoMenosCart','carrito_controller::descontar',['filter'=>'auth']);
//$routes->get('/eliminadosProductos','producto_controller::deletedProducts');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
