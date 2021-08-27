<?php

namespace App\Models;


use App\Models\UploadedPicture;


class UploadFiles extends UploadedPicture
{
    public $picture;

    public function __construct($picture)
    {
        $this->picture = $picture;
    }
    public function uploadInFolder()
    {
        $tmp = $this->picture['tmp_name'];
        $this->tmp = $tmp;
        $img_folder = (ASSETS . 'img' . DIRECTORY_SEPARATOR);
        $img_ex = pathinfo($this->picture['name'], PATHINFO_EXTENSION);
		$img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $this->newPictureName = $new_img_name ;
        $img_upload_path = $img_folder . $this->newPictureName;
        $move_file = move_uploaded_file($tmp, $img_upload_path);
        if (!$move_file) {
            return False;
        }
        return $this->newPictureName;
    }
}
