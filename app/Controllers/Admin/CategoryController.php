<?php


namespace App\Controllers\Admin;


use App\Services\Controller;
use App\Models\Category;
use App\Services\Redirect;
use App\Services\Request;


class CategoryController extends Controller
{
    public  function  index()
    {
      $category=new Category;
      $category=$category->get();


      dd($category);
      //echo  $this->view->render("dashboard/category/index.html.twig", ["categories"=>$category]);
      //
    }

    public function  create()
    {
      echo  $this->view->render("dashboard/category/create.html.twig");
    }

    public  function   store(Request $request)
    {

        $name=$request->input("text");
        $category=new Category;
        $category->create($name);

        Redirect::view('Location:/admins/category');

    }

 






                                                           











}