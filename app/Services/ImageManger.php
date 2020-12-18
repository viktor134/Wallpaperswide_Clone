<?php


namespace App\Services;

use App\Models\Image;
use App\Services\Image as img;


class ImageManger implements img
{
    public static function upload($var, $data)
    {


        $upload_image = $_FILES[$var]["tmp_name"];

        $image = $_FILES[$var]["name"];

        if (is_uploaded_file($upload_image)) {

            move_uploaded_file($upload_image, "../public/uploads/" . $image);


            $data["image"] = $image;

            array_push($data, $image);   //в даной строчьке получалось два ключя в массиве  один "image"   один 0  и обо содержали тоже значение

            array_pop($data);  // здесь я удалаю не нужный элеиент масива

            return $data;

        }


    }

    public static function update($id, $data)
    {
        if (!empty($data["image"])) {

            return $data;

        } else {

            $upload_image = $_FILES['image']["tmp_name"];

            $image = $_FILES['image']["name"];

            $old_image = new Image;
            $old_image = $old_image->getByID($id);

            //dd($image);


            if (is_uploaded_file($upload_image)) {
                if (is_file('../public/uploads/' . $old_image->image)) {
                    unlink('../public/uploads/' . $old_image->image);
                }
            }
            move_uploaded_file($upload_image, "../public/uploads/" . $image);


            $data["image"] = $image;

            array_push($data, $image);   //в даной строчьке получалось два ключя в массиве  один "image"   один 0  и обо содержали тоже значение

            array_pop($data);  // здесь я удалаю не нужный элеиент масива

            return $data;
        }
    }


    public static function delete($d)
    {
        // TODO: Implement delete() method.
    }


}