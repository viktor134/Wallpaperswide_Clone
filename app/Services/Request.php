<?php


namespace App\Services;



class Request
{
    public function input($params)
    {

            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                return $_GET[$params];
            } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {


                return  $_POST[$params];

            } else {
                return "error";
            }

        }



    public function inputs($params=[])
    {
        //var_dump($params);
        foreach ($params as $param){
           return $param=$_POST;

        }
        }
        //dd($_REQUEST["image"],$_REQUEST["name"],$_REQUEST["description"]);
        //dd($_POST );




    public  function  all(){
         dd($_REQUEST);
    }

}