<?php


namespace App\Models;

use App\Services\Model;
use PDO;

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
        $sql="SELECT * FROM $this->table WHERE id=?";
        $statement=$this->pdo->prepare($sql);
        $statement->bindParam(1,$id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
    //dd($data);

    if(!empty($data["name"]))
       {
        $sql="UPDATE $this->table SET name=?  WHERE id=?";

        $statement=$this->pdo->prepare($sql);
                  
        $statement->bindValue(1,$data['name']);

        $statement->bindValue(2,$id);

        $statement->execute();
       }
       if(!empty($data["description"]))
       {
          // dd("tg");
        $sql="UPDATE $this->table SET description=?  WHERE id=?";

        $statement=$this->pdo->prepare($sql);
                  
        $statement->bindValue(1,$data['description']);

        $statement->bindValue(2,$id);

        $statement->execute();
       }
       
       if(!empty($data["category_id"]))
       {
        $sql="UPDATE $this->table SET category_id=?  WHERE id=?";

        $statement=$this->pdo->prepare($sql);
                  
        $statement->bindValue(1,$data['category_id']);

        $statement->bindValue(2,$id);

        $statement->execute();
          
       }
       if(!empty($data["image"]))
       {


        $sql="UPDATE $this->table SET image=?  WHERE id=?";

        $statement=$this->pdo->prepare($sql);
                  
        $statement->bindValue(1,$data['image']);

        $statement->bindValue(2,$id);

        $statement->execute();

       }




       

    }

    public function delete($id)
    {
        $sql="DELETE FROM  $this->table WHERE id=?";
        $statement=$this->pdo->prepare($sql);
        $statement->bindValue(1,$id);
        $statement->execute();
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