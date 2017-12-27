<?php

namespace App\Controller;

use App\View;

class Controller
{
    protected $view;

    public function __destruct()
    {
        $view = $this->view;
        if ($view instanceof View) {
            extract($view->data);
            require "{$view->view}";
        }
    }

}