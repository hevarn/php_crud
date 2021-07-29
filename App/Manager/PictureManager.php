<?php

namespace App\Manager;

use Exception;
use App\Models\BottleSql;
use App\Models\UploadFiles;
use App\Models\UploadedPicture;

class PictureManager
{
    public function manage($id, $db)
    {
        $req = new BottleSql($db);
        $tags = array_pop($_POST);
        $uploadedPicture = new UploadedPicture($_FILES['picture']);
        if (!$uploadedPicture->isValid()) {
            throw new Exception($uploadedPicture->getMessageError()) ;
        }
        $uploadFiles = new UploadFiles($uploadedPicture->getName(),$uploadedPicture->getPicture()['tmp_name']);
        $result = $req->sendUpdate($id, $_POST, $tags,$uploadFiles->getName());
        if ($result) {
            $uploadFiles->upload();
            throw new Exception($uploadFiles->getMessageError());
        }else{
            throw new Exception($uploadFiles->getMessageError());
        }
        return false;
    }
}
