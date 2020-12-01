<?php

namespace  App\Controllers;

use App\Services\BaseController;




class HomeController extends BaseController
{

    public function index()
   {
       echo $this->view->render('main.html.twig');

   }


}












