<?php

namespace Code\Controller;

use Code\DB\Connection;
use Code\Entity\Expense;
use Code\View\View;

class MyExpensesController
{

    public function index()
    {
        var_dump((new Expense(Connection::getInstance()))->findAll());
    }

    public function new()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'POST') {
            $data = $_POST;
            
            $expense = new Expense(Connection::getInstance());
            $expense->insert($data);

            return header('Location: ' . HOME . '/myexpenses');
        }

        $view = new View('expenses/new.phtml');
        return $view->render();
    }
}
