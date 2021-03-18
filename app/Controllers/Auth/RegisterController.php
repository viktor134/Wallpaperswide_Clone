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

    public function   sign_up(Request $request)
    {

       $data=$request->inputs(['name','email','password']);

       $user=new User();

       $user->create($data);
    }
}