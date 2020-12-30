<?php

namespace App\Models;

use App\Services\Model;
use InvalidArgumentException;


class User  extends  Model
{
 public function create($data)
 {
     if(!empty($data['name'])){
         throw  new InvalidArgumentException('No Send Name');
     }
     if(empty($data['email'])){
         throw  new InvalidArgumentException('No Send Email');
     }
     if(empty($data['password'])){
         throw  new InvalidArgumentException('No Send ');
     }
     if(empty($data['confirm'])){
         throw  new InvalidArgumentException('No Send Name');
     }
 }

 public function get()
 {
     // TODO: Implement get() method.
 }

 public function delete($id)
 {
     // TODO: Implement delete() method.
 }
 public function getByID($id)
 {
     // TODO: Implement getByID() method.
 }
 public function update($variable, $id)
 {
     // TODO: Implement update() method.
 }
}
