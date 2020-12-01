<?php

use App\Services\Route;


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/users', ["App\Controllers\HomeController", "index"]);

    $r->addGroup('/admins', function (FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '', ["App\Controllers\Admin\AdminController", "index"]);
        $r->addRoute('GET','/image',["App\Controllers\Admin\ImageController", "index"]);
        $r->addRoute('GET','/image/create',["App\Controllers\Admin\ImageController", "create"]);
        $r->addRoute('GET','/user',["App\Controllers\Admin\UserController", "index"]);
        $r->addRoute('GET','/category',["App\Controllers\Admin\CategoryController", "index"]);


    });

     });
//    $r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
//    // The /{title} suffix is optional
//    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');

        Route::dispatcher($dispatcher);




