<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get( 'signup','RegistroController::index');
$routes->post( 'signup','RegistroController::store');
$routes->get('/signin', 'LoginController::index');
$routes->post('/signin', 'LoginController::loginAuth');
$routes->get('/', 'LoginController::index',['filter'=>'authGuard']);



$routes->get('/home', 'HomeController::index',['as'=>'home']);

$routes->post('/empresa/add','EmpresaController::add',['as'=>'nuevaEmpresa']);
$routes->post('/empresa/update','EmpresaController::update',['as'=>'ActualizarEmpresa']);
$routes->get( 'empleados/(:num)','EmpleadoController::listAll/$1',['as'=>'listarEmpleados']);
$routes->get( 'nuevoEmpleado/(:num)','EmpleadoController::create/$1',['as'=>'nuevoEmpleados']);
$routes->get( 'empleado/(:num)','EmpleadoController::edit/$1',['as'=>'modificarEmpleados']);
$routes->get('empleado/contratos/(:num)','EmpleadoController::editContrato/$id',['as'=>'datosContrato']);
$routes->post('empleado','EmpleadoController::add',['as'=>'registrarEmpleado']);

$routes->group('/',['filter'=>'authGuard'],function($routes){
    $routes->group('empresa',function($routes){

        $routes->add('','EmpresaController::index',['as'=>'nuevaEmpresa']);
        $routes->add('modificar/(:num)','EmpresaController::edit/$1',['as'=>'modificarEmpresa']);
        $routes->add('listar','EmpresaController::listAll',['as'=>'listarEmpresa']);


        
    
    });
    $routes->group('contrato',function($routes){
        $routes->add('nuevo','ContratoController::index',['as'=>'nuevo_contrato']);
        $routes->add('configurar','ContratoController::configurar',['as'=>'configurar_contrato']);
        $routes->add('editar','ContratoController::editar',['as'=>'editar_contrato']);
        $routes->add('sueldo_minimo','ContratoController::sueldo_minimo',['as'=>'sueldo_minimo']);
    
    });
    $routes->group('configuracion',function($routes){
        $routes->add('roles','Roles::roles',['as'=>'roles']);
        $routes->add('nuevoRol','Roles::crear',['as'=>'nuevoRol']);
        $routes->add('permisos/(:num)','Roles::permisos/$1',['as'=>'permisosRol']);
    
        
    
    });
    

});




if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
