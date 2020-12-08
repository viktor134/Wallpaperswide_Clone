<?php

namespace App\Services;

use DI\ContainerBuilder;
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


            Environment::class => function () {


                return new Environment(new  FilesystemLoader("/"));
            }





        ]);

        return $container = $containerBuilder->build();


    }

}