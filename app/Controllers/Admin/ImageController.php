<?php


namespace App\Controllers\Admin;


use App\Services\Controller;

class ImageController extends Controller
{
    public  function  index(){

       echo $this->view->render("dashboard/image/index");
    }
    public  function  create(){
           dd("create img post");
    }
}