<?php


namespace App\Services;

use PDO;

abstract class  Model
{

    protected $pdo;


    public function __construct()
    {
        $connection = (require __DIR__ . "\../../config/setting.php")['db'];


        $this->pdo = new PDO(
            'mysql:host=' . $connection['host'] . ';dbname=' . $connection['dbname'],
            $connection['user'],
            $connection['password']
        );


    }

    abstract public function get();

    abstract public function create($variable);


}