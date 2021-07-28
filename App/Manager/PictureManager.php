<?php

namespace App\Manager;

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
            return false;//return exeption avec throw
        }

        $uploadFiles = new UploadFiles($uploadedPicture->getName(),$uploadedPicture->getPicture()['tmp_name']);
        $result = $req->sendUpdate($id, $_POST, $tags);
        if ($result) {
            if ($uploadFiles->upload()) {
                return true;
            }
        }
        return false;
    }
}
