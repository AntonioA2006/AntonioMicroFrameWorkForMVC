<?php

namespace Config;

use FastRoute\Dispatcher;

class CheckRoutes {

    public static function ComproveRouter($dispatcher, $httpMethod, $uri) {

        $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

        switch ($routeInfo[0]) {

            case Dispatcher::NOT_FOUND:
                echo "404";
                break;

            case Dispatcher::METHOD_NOT_ALLOWED:
                echo "405";
                break;

            case Dispatcher::FOUND:

                $handler = $routeInfo[1];
                $vars = $routeInfo[2];

                call_user_func_array($handler, $vars);

                break;
        }
    }
}