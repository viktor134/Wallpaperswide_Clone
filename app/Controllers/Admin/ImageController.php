<?php


namespace App\Controllers\Admin;


use App\Services\Controller;
use App\Services\Request;

class ImageController extends Controller
{
    public  function  index(){

       echo $this->view->render("dashboard/image/index");
    }
    public  function  create(){
           //dd("create img post");
        echo $this->view->render("dashboard/image/create");
    }
    public function   store(Request $request)
    {
       $data=$request->inputs(["name","description","image","babo"]);

       dd($data);
        //  $request->all()
    }
}