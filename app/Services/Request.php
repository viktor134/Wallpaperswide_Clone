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
       
        foreach ($params as $param){
           return $param=$_POST;

        }
        }
  




    public  function  all(){
         dd($_REQUEST);
    }

}