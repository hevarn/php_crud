<?php

namespace App\Manager;

use App\Models\UploadFiles;
use App\Models\UploadedPicture;

class PictureManager
{
    public function __construct($picture,?int $id=null)
    {
        $this->id = $id;
        $this->picture = $picture;
        return $this->picture;
    }
    public function manage():array
    {
        $uploadedPicture = new UploadedPicture($this->picture);
        $errors = $uploadedPicture->isValid([]);
        if ($errors) {
            $_SESSION['errors'][] = $errors;
            return header("Location: /projetZero/admin/panel/create");
            exit();
        }else{
            var_dump($uploadedPicture);die();
            if ($uploadedPicture == true) {
                $uploadFiles = (new UploadFiles($this->picture))->uploadInFolder();;
                if ($uploadFiles == true) {
                    return [true, $uploadFiles];
                }else {
                    return [false,null];
                }
            }else{
                return [false,null];
            }
        }
    }
}
