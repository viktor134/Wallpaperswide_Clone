<?php

namespace  App\Controllers;

use App\Services\Controller;




class HomeController extends Controller
{

    public function index()
   {
       echo $this->view->render('page/index');

   }


}












