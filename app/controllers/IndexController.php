<?php
namespace Controllers;

use Config\Render;
use Models\Abogados;
class IndexController   {
    public static function app (){
    $query = Abogados::getAll();
  
    return Render::view('index',[
            'antonio' => "adame",
            'query' => $query
        ]);
    }
    public static function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
                echo json_encode("inapwinga");
        }
    }
}
