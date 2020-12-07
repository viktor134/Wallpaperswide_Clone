<?php


namespace App\Models;

use  App\Services\Model;


class Category extends  Model

{
    protected  $table="category";


    public  function  create($data){

        $sql = "INSERT INTO  $this->table (name) VALUES (:name)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            "name"=>$data]);
    }




}