<?php

namespace Controllers;

use MVC\Router;

class SobreNosotrosController{
    public static function index(Router $router){

        $router->render('sobreNosotros/index',[

        ]);
    }
}