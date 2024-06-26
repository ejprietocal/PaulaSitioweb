<?php


namespace Controllers;

use MVC\Router;


class ContactoController{

    public static function index(Router $router){


        $router->render('contacto/index',[

            
        ]);
        
    }

}