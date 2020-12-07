<?php

namespace  App\Controllers\Admin;

use App\Services\Controller;


class AdminController extends Controller
{
    public function index()
    {
       echo $this->view->render("dashboard/admin.html.twig");
    }
}