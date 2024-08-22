<?php

namespace Config;

use FastRoute\Dispatcher;

class CheckRoutes{
  

    public static function ComproveRouter($dispatcher, $httpMehtod, $url){
   
  
        $routeInfo = $dispatcher->dispatch($httpMehtod, $url);
            switch ($routeInfo[0]) {
        case Dispatcher::NOT_FOUND:
            echo '404 Not Found';
            break;
        case Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            echo '405 Method Not Allowed';
            break;
        case Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            
            // Depuración: Verificar que $handler es un array con el método y clase correctos
            if (is_array($handler) && method_exists($handler[0], $handler[1])) {
                call_user_func($handler, $vars);
            } else {
                echo 'Handler no válido o método no encontrado.';
            }
            break;
        }
    }


}