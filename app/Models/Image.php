<?php


namespace App\Models;

use App\Services\Model;
Use PDO;

class Image extends  Model
{
    protected  $table="image";

    public  function  create($data){

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
        // TODO: Implement getByID() method.
    }

    public function update($variable, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}