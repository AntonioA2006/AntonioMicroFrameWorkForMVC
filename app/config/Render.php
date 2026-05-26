<?php

namespace Config;

class Render {

    public static function view($view, $datos = [])
    {

        extract($datos);

        ob_start();

        require_once __DIR__ . '/../../views/' . $view . '.php';

        $content = ob_get_clean();
        echo $content;
    }
}