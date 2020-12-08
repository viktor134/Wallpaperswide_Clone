<?php


namespace App\Models;

use  App\Services\Model;
use Pdo;



class Category extends  Model 

{
    protected  $table="category";


    public  function  create($data){

        $sql = "INSERT INTO  $this->table (name) VALUES (:name)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            "name"=>$data]);
    }

    public  function get(){
        $sql="SELECT * FROM $this->table";
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
        return $category=$statement->fetchAll(PDO::FETCH_OBJ);
    }




}