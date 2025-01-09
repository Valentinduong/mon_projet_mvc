<?php
namespace App\Core;

class Router
{
    public function run()
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        if ($uri === '' || $uri === 'accueil') {
            $controller = new \App\Controller\MainController();
            echo $controller->accueil();
        } else {
            $controller = new \App\Controller\MainController();
            echo $controller->erreur404();
        }
    }
}
