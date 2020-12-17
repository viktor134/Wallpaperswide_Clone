<?php


namespace App\Models;

use App\Services\Model;
use PDO;

class Image extends  Model
{
    protected  $table="image";

    public  function  create($data){
        dd($data);

        $sql = "INSERT INTO  $this->table (name,description,category_id,image) VALUES (:name,:description,:category_id,:image)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            "name"=>$data["name"],
            "description"=>$data["description"],
            "category_id"=>$data["category_id"],
            "image"=>$data["image"]
        ]);

        //dd($statement);
    }

    public  function  get()
    {
       $sql="SELECT * FROM $this->table";
       $statement=$this->pdo->prepare($sql);
       $statement->execute();
       return $image=$statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function getByID($id)
    {
        $sql="SELECT * FROM $this->table WHERE id=?";
        $statement=$this->pdo->prepare($sql);
        $statement->bindParam(1,$id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        //dd($data);
        
        $sql="UPDATE $this->table SET name=?,description=?,category_id=?,image=?   WHERE id=?";

        $statement=$this->pdo->prepare($sql);
                    
        $statement->bindValue(1,$data['name']);

        $statement->bindValue(2,$data['description']);

        $statement->bindValue(3,$data['category_id']);

        $statement->bindValue(4,$data['image']);

        $statement->bindValue(5,$id);

        $statement->execute();

    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public  function  oneToMany()
    {
        $sql="select  image.id,image.name, image.description,image.image,category.title
         FROM  $this->table  INNER JOIN category  on image.category_id=category.id";
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }





}