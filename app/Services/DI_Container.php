<?php

namespace App\Services;

use DI\ContainerBuilder;
use League\Plates\Engine;
use Twig\Environment;
use Twig\Loader\ArrayLoader;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\DebugExtension;


class DI_Container
{
    public static function configure_container()
    {
        $containerBuilder = new  ContainerBuilder;
        $containerBuilder->addDefinitions([
           Engine::class=>function(){
             return new Engine("../public/");
           }




        ]);

        return $container = $containerBuilder->build();


    }

}