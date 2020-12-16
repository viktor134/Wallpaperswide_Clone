<?php


namespace App\Controllers\Admin;


use App\Services\Controller;
use App\Models\Category;
use App\Services\Redirect;
use App\Services\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $category = new Category;
        $category = $category->get();


        echo $this->view->render("dashboard/category/index", ["categories" => $category]);

    }

    public function create()
    {
        echo $this->view->render("dashboard/category/create");
    }

    public function store(Request $request)
    {

        $title = $request->input('text');

        $category = new Category;

        $category->create($title);

        Redirect::view('Location:/admins/category');


    }


    public function edit($id)
    {

        $category = new Category;

        $category = $category->getById($id);

        echo $this->view->render("dashboard/category/edit", ['category' => $category]);


    }

    public function update(Request $request, $id)
    {


        $title = $request->input("text");

        $category = new Category;

        $category->update($title, $id);

        Redirect::view("Location:/admins/category");


    }

    public  function  destroy($id)
    {

        $category=new Category;

        $category->delete($id);

        Redirect::view("Location:/admins/category");
    }


}