<?php

namespace  App\Services;

use Twig\Environment;

class Controller
{
    protected $view;



    function __construct(Environment $view)
    {
        $this->view=$view;
    }



}