<?php

namespace  App\Controllers\Admin;


use App\Services\Controller;

class UserController extends  Controller
{

    public  function  index(){
      echo  $this->view->render("dashboard/user/index");
    }

}