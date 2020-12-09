<?php

namespace  App\Services;


use League\Plates\Engine;

class Controller
{
    protected $view;



    function __construct(Engine $view)
    {
        $this->view=$view;
    }



}