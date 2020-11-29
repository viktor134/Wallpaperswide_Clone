<?php

namespace  App\Controllers;

use App\Services\Controllers;
use Twig\Environment;



class HomeController extends Controllers
{
    private $view;

   public function __construct(Environment $view)
   {
       $this->view=$view;
   }

    public function index()
   {

       echo $this->view->render('main.html.twig');

   }
}












