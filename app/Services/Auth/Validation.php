<?php


namespace App\Services\Auth;

use App\Models\User;
use InvalidArgumentException;


trait Validation
{

    public static function inputs(array $data)
    {



        if (empty($data['name'])) {
            throw  new InvalidArgumentException('Введите имя');

        }

        if (!preg_match('/^[a-zA-Z0-9]+$/', $data['name'])) {
            throw new InvalidArgumentException('имя может состоять только из символов латинского алфавита и цифр');
        }
        if (empty($data['email'])) {
            throw  new InvalidArgumentException('Введите Email');
        }




        if ($data['password'] === $data['confirm']) {
            if (empty($data['password'])) {
                throw  new InvalidArgumentException('Введите пароль ');
            }
            if (empty($data['confirm'])) {
                throw  new InvalidArgumentException('Повторите пароль');
            }
            if (mb_strlen($data['password']) < 8) {
                throw  new InvalidArgumentException('Пароль должен быть не менее 8 символов');
            }
        } else {
            throw  new InvalidArgumentException("Пароли не совпадают");
        }

        if($data['checkbox']=="no"){
            throw new  InvalidArgumentException("не принял условия лицензионного соглашения");
        }

        return $data;
    }
}