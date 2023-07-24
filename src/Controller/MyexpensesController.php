<?php
namespace Code\Controller;

use Code\View\View;

class MyExpensesController
{

    public function index()
    {
        print 'Isso é o Index';
    }

    public function new()
    {
        $view = new View('expenses/new.phtml');
        return $view->render();
    }
}