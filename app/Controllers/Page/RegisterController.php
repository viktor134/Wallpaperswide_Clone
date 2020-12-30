<?php

namespace  App\Controllers\Page;

use App\Services\Controller;
use App\Services\Request;
use App\Models\User;
use InvalidArgumentException;


class  RegisterController extends Controller
{
    public function index()
    {
      echo $this->view->render("page/register");
    }

    public  function  store(Request $request)
    {

        $create = $request->inputs(["name", "email", "password", "confirm"]);

        $user = new User;
        try {
            $user->create($create);
        } catch (InvalidArgumentException $e) {
            echo $this->view->render("page/register", ["error" => $e->getMessage()]);
            return;
        }



       $this->view->render("page/register");

      // dd($create);
    }


}