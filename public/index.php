<?php
require_once __DIR__ . '/../app/init.php';
use Config\CheckRoutes;
use Controllers\IndexController;
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





CheckRoutes::ComproveRouter($dispatcher, $_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);





   




