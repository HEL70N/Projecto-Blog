<?php

namespace Code\Controller;

use Code\Authenticator\Authenticator;
use Code\DB\Connection;
use Code\Entity\User;
use Code\View\View;

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            var_dump($_POST);
            $user = new User(Connection::getInstance());
            $authenticator = new Authenticator($user);

            if (!$authenticator->login($_POST)) {
                die("Usuário ou senha incorrectos!");
            }
            die("Usuário logado com sucesso!");
        }

        $view = new View('auth/index.phtml');
        return $view->render();
    }
}
