<?php


namespace App\Models;

use  App\Services\Model;
use Pdo;



class Category extends  Model 

{
    private $table="category";


    public  function  create($data){

        $sql = "INSERT INTO  $this->table (title) VALUES (:title)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            "title"=>$data]);
    }

   public  function get(){
        $sql="SELECT * FROM $this->table";
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
        return $category=$statement->fetchAll(PDO::FETCH_OBJ);
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
        $sql="UPDATE $this->table SET  title=? WHERE id=?";
        $statement=$this->pdo->prepare($sql);
        $statement->bindValue(1,$data);
        $statement->bindValue(2,$id);
        $statement->execute();
         
        dd($res=$statement);
       
    }

    public  function  delete($id){
        $sql="Delete from $this->table where id=?";
        $statement=$this->pdo->prepare($sql);
        $statement->bindValue(1,$id);
        $statement->execute();
    }




}