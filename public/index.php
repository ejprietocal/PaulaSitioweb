<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\ContactoController;
use Controllers\MainpageController;
use Controllers\SobreNosotrosController;


$router = new Router();



$router->get('/',[MainpageController::class,'index']);
$router->get('/contacto',[ContactoController::class,'index']);
$router->get('/sobre-nosotros',[SobreNosotrosController::class,'index']);

//aqui van las rutas



$router->comprobarRutas();