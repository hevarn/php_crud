<?php

namespace App\Models;

class UploadFiles extends UploadFiles
{
    private $picture_name;
    private $img_folder;
    private $dir;
    // uniqid() . '_' .$picture['name']

    public function __construct($picture_name)
    {
        $this->picture_name  = $picture_name;
        $this->img_folder = (ASSETS . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $this->picture_name);
        @mkdir($this->img_folder, 0777);
        $this->dir = $this->img_folder . $this->picture_name;
    }
    public function upload(UploadedPicture $uploadedPicture)
    {
        if ($uploadedPicture->isValid()) {
            if (file_exists($this->img_folder)) {
                $move_file = @move_uploaded_file($this->picture_name, $this->dir);
                // if (!$move_file) {
                //     $uploadedPicture->setMessageError("probleme de Transfer à la base de donnée ");
                // }
            }
        }
        // if (isset($msg_error)) {
        //     header("Location: /projetZero/formAdmin/?success=true");
        // }
    }
}
