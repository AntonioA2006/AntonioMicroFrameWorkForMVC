<?php
require_once __DIR__ . '/../app/init.php';

use Controllers\IndexController;
use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
    // PARA anidar varias rutas o un conjunto de rutas
    // $r->addGroup('/admin', function (RouteCollector $r) {
    //     $r->addRoute('GET', '/do-something',IndexController::index());
    //     $r->addRoute('GET', '/do-another-thing', 'handler');
    //     $r->addRoute('GET', '/do-something-else', 'handler');
    // });
    $r->addRoute(['GET'], '/hello', [IndexController::class, 'helloWord']);
});







$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
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