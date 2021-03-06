<?php

namespace App\Models;

use App\Services\Model;
use InvalidArgumentException;


class User extends Model
{
    private $table = "users";

    public function create($data)
    {
        $sql = "INSERT INTO $this->table (name,email,password,role,token) 
   VALUES (:name,:email,:password,:role,:token)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => crypt($data['password']),
            "role" => "user",
            "token" => sha1(random_bytes(100))

        ]);


    }

    public function get()
    {
        // TODO: Implement get() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function getByID($id)
    {
        // TODO: Implement getByID() method.
    }

    public function update($variable, $id)
    {
        // TODO: Implement update() method.
    }

}
