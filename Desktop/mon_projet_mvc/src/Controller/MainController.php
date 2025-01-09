<?php
namespace App\Controller;

use App\Model\UserModel;

class MainController
{
    public function accueil()
    {
        return require __DIR__ . '/../View/accueil.php';
    }

    public function erreur404()
    {
        http_response_code(404);
        return require __DIR__ . '/../View/erreur404.php';
    }
}
