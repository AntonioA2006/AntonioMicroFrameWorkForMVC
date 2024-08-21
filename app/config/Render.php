<?php
namespace Config;
class Render {
    public static function view($view, $datos = [])
    {

        

        
        foreach ($datos as $key => $value) {
            $$key = $value; 
        }
        
        ob_start(); 
        // require_once __DIR__ . '/../../views/index.php';
        // require_once __DIR__ .  '/../../views/' . $view . '.php';
        
        ob_get_clean(); // Limpia el Buffer
        
        
        
        
        //utilizar el layaout de acuerdo ala URL
        // $url_actual = $_SERVER['PATH_INFO'] ?? '/';

        //utilizar lalayouts por default para admins panels etc
        
        // if (str_contains($url_actual,'/admin')) {
            //     # code...
            //     include_once __DIR__ . '/views/admin-layout.php';
            // }else{
                
            //     include_once __DIR__ . '/views/layout.php';
            // }
            
            include_once __DIR__ . '/../../views/' . $view . '.php';



    }
}