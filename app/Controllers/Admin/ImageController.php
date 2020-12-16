<?php


namespace App\Controllers\Admin;


use App\Models\Category;
use App\Models\Image;
use App\Services\Controller;
use App\Services\Redirect;
use App\Services\Request;
use App\Services\ImageManger;
use League\Plates\Engine;


class ImageController extends Controller
{


    public function index()
    {

        $image = new Image();

        $image=$image->oneToMany();

        echo $this->view->render("dashboard/image/index", ["images" => $image]);
    }

    public function create()
    {

        $category = new Category();

        $category = $category->get();

        echo $this->view->render("dashboard/image/create", ["categories" => $category]);
    }

    public function store(Request $request)
    {

        $data = $request->inputs(["name", "description", "category_id"]);

        $data = ImageManger::upload("image", $data);

        $image = new Image();

        $image->create($data);

        Redirect::view("Location:/admins/image");

    }

    public function edit()
    {

    }
}