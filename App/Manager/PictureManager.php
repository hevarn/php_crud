<?php

namespace App\Manager;

use App\Models\UploadFiles;
use App\Models\UploadedPicture;

class PictureManager
{
    public function __construct($picture)
    {
        $this->picture = $picture;
        return $this->picture;
    }
    public function manage():array
    {
        $uploadedPicture = new UploadedPicture($this->picture);
        $resultValid = $uploadedPicture->isValid();
        if ($resultValid) {
            $uploadFiles = new UploadFiles($this->picture);
            $resultIsUpload = $uploadFiles->uploadInFolder();

            if ($resultIsUpload){
                return [true, $uploadFiles];
            }else {
                return [false,null];
            }
        }else{
            return [false,null];
        }
    }
}
