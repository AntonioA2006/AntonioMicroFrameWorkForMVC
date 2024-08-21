<?php
namespace Controllers;

use Config\Render;

class IndexController  {
    public static function index() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            # code...
            echo   "Este es el método estático index del IndexController.";
        }
    }
    public static function helloWord (){
        Render::view('index',[
            'antonio' => "adame"
        ]);
    }
}
