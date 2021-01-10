<?php


namespace App\Services;

use App\Models\Category;

class Collections extends  Controller //наследуем что получить обьект шаблонизатора
{
    public  function  showCat()  //показать категорию
    {
         $category=new Category;
         $category=$category->get();
         $this->view->addData(["categories"=>$category]);
    }
}