<?php


namespace App\Controllers\Admin;


use App\Services\Controller;
use http\Env;

class CategoryController extends Controller
{
    public  function  index()
    {
      echo  $this->view->render("dashboard/category/index.html.twig");
    }

    public function  create()
    {
      echo  $this->view->render("dashboard/category/create.html.twig");
    }

    public  function   store()
    {

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "myproject";

        $pdo = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $result = $_POST["text"];

        $sql = "INSERT INTO  category (name) VALUES (:name)";
        $statement = $pdo->prepare($sql);
        $statement->execute([
            "name" => $result
        ]);

       header("Location:/admins/category");
       die();
    }





                                                           











}