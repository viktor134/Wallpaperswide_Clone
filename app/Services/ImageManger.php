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
            array_push($data, $image);
            return $data;
        }


    }
    public static function update()
    {
        // TODO: Implement update() method.
    }

    public  static function delete()
    {
        // TODO: Implement delete() method.
    }


}