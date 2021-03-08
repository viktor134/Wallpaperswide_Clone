<?php

namespace App\Services;

use DI\Container;
use FastRoute\Dispatcher;
use App\Services\DI_Container;

class Route
{
    public static function dispatcher($dispatcher)
    {
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
        switch ($routeInfo[0]) {
            case  Dispatcher::NOT_FOUND:
                include "..\public/404.php";
                break;
            case Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                // ... 405 Method Not Allowed
                break;
            case  Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];


                $container = DI_Container::configure_container();
                $container->call($handler, $vars);


                break;

        }
    }
}