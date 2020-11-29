<?php
namespace App\Services;

use DI\ContainerBuilder;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;



class DI_Container{
  public static function configure_container(){
         $containerBuilder=new  ContainerBuilder;
         $containerBuilder->addDefinitions([
             Environment::class=>function(){
               return new Environment(new FilesystemLoader("/"));

             }


         ]);

       return $container=$containerBuilder->build();


   }

}