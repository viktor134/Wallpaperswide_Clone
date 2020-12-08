<?php


namespace App\Services;

use PDO;

class   Model
{

    protected $pdo;



 public function __construct()
    {
        $connection=(require __DIR__ . "\../../config/setting.php")['db'];


      $this->pdo=new PDO(
            'mysql:host=' .$connection['host'] . ';dbname=' . $connection['dbname'],
             $connection['user'],
             $connection['password']
        );







    }






}