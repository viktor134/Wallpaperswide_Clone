<?php


namespace App\Controllers\Admin;


use App\Services\Controller;

class CategoryController extends Controller
{
    public  function  index(){
      echo  $this->view->render("dashboard/category/index.html.twig");
    }

}