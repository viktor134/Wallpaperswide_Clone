<?php

namespace  App\Services;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

class Controller
{
    protected $view;



    function __construct(Environment  $view)
    {
        $this->view=$view;
    }



}