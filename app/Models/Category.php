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
        return $category=$statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function  getById($id)
    {
        $sql="SELECT * FROM $this->table where id=?";
        $statement=$this->pdo->prepare($sql);
        $statement->bindValue(1,$id);
        $statement->execute();
        return $category=$statement->fetch(PDO::FETCH_OBJ);

    }
    public  function  update($data,$id){
        $sql="UPDATE $this->table SET name=? WHERE id=?";
        $statement=$this->pdo->prepare($sql);
        $statement->bindValue(1,$data);
        $statement->bindValue(2,$id);
        $statement->execute();
    }




}