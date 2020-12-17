<?php


namespace App\Services;


class ImageManger implements Image
{
    public static function upload($var,$data)
    {
        $upload_image = $_FILES[$var]["tmp_name"];
        $image = $_FILES[$var]["name"];

        if (is_uploaded_file($upload_image)) {
            move_uploaded_file($upload_image, "../public/uploads/" . $image);
            $data["image"] = $image;
            array_push($data, $image);  //в даной строчьке получалось два ключя в массиве  один "image"   один 0  и обо содержали тоже значение  
            array_pop($data);  // здесь я удалаю не нужный элеиент масива
            return $data;
        }


    }
    public static function update($id,$f)
    {
        // TODO: Implement update() method.
    }

    public  static function delete($d)
    {
        // TODO: Implement delete() method.
    }


}