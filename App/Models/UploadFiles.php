<?php

namespace App\Models;

class UploadFiles extends UploadedPicture
{
    private $picture_name;
    private $img_folder;
    private $dir;
    private $tmp;
    // uniqid() . '_' .$picture['name']

    public function __construct($picture_name, $tmp)
    {
        $this->tmp= $tmp;
        $this->picture_name  = $picture_name;
        $this->img_folder = (ASSETS . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR .$picture_name);
        @mkdir($this->img_folder, 0777);
        $this->dir = $this->img_folder . $this->picture_name;
    }
    public function upload()
    {
        if (file_exists($this->img_folder)) {
            $move_file = @move_uploaded_file($this->tmp, $this->dir);
            var_dump($this->picture_name);
            // if (!$move_file) {
            //     $uploadedPicture->setMessageError("probleme de Transfer à la base de donnée ");
            // }
        }

        // if (isset($msg_error)) {
        //     header("Location: /projetZero/formAdmin/?success=true");
        // }
    }
}
