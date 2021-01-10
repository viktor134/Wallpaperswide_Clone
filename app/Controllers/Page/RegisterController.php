<?php

namespace App\Controllers\Page;

use App\Services\Controller;
use App\Services\Request;
use App\Models\User;
use InvalidArgumentException;
use App\Models\Category;
use App\Services\Collections;


class  RegisterController extends Controller
{
    public function index(Collections $category)
    {
        $category->showCat();
        echo $this->view->render("page/register");
    }

    public function store(Request $request,Collections $category)
    {


        $create = $request->inputs(["name", "email", "password", "confirm"]);


        $user = new User;

        try {

            $user->create($create);

        } catch (InvalidArgumentException $e) {

            echo $this->view->render("page/register", ["error" => $e->getMessage()]);

            return;
        }

        $category->showCat();
        echo $this->view->render("page/sucess");


    }


}