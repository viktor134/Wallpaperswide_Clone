<?php


namespace App\Services;



class Request
{
  public  function  input($params){
        if($_SERVER["REQUEST_METHOD"]=="GET"){
          return  $_GET[$params];
        }elseif ($_SERVER["REQUEST_METHOD"]=="POST"){

           return  $_POST[$params];

        }else{
            echo "error";
        }



    }
}