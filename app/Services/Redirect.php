<?php


namespace App\Services;


trait Redirect
{
   public  static function  view($name)
   {
       if(gettype($name)==="string"){
           header($name);
           die();
       }else{
           dd("type error");
       }
       }

}