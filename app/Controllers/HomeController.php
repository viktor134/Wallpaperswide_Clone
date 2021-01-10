<?php

namespace  App\Controllers;

use App\Models\Category;
use App\Services\Collections;
use App\Services\Controller;





class HomeController extends Controller
{

    public function index(Collections $category)
   {
       $category->showCat();
       echo $this->view->render('page/index');

   }


}












