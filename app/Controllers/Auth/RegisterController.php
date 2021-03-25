<?php


namespace  App\Controllers\Auth;

use App\Services\Controller;
use App\Services\Request;
use App\Models\User;


class RegisterController extends  Controller
{
    public  function  index()
    {
        echo $this->view->render('page/register');
    }

    public function   store(Request $request)
    {
       
      if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $name=$_POST['email'];
          $name=$_POST['password'];
          $name=$_POST['confirm'];

          $errorEmpty=false;
          $errorEmpty=false;

          if(empty($name)){
              echo "<span class='icon is-small is-left'></span>";
              $errorEmpty=true;
          }
      }
       

    //    $data=$request->inputs(['name','email','password']);

    //    $user=new User();

    //    $user->create($data);
    }
}