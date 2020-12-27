<?php

namespace  App\Controllers\Page;

use App\Services\Controller;

class  RegisterController extends Controller
{
    public function index()
    {
      echo $this->view->render("page/register");
    }

    public  function  store()
    {

        $host = '127.0.0.1';
        $db   = 'test';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $db=new \PDO();

        $auth = new \Delight\Auth\Auth();

        try {
            $userId = $auth->register($_POST['email'], $_POST['password'], $_POST['username'], function ($selector, $token) {
                echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
            });

            echo  'We have signed up a new user with the ID ' . $userId;
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Invalid email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('User already exists');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

}