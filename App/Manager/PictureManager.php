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
        $picture = $_FILES['picture'];
        $uploadedPicture = new UploadedPicture($picture);
        if (!$uploadedPicture->isValid()) {
            die(" la verification à echoué") ;
        }
        $uploadFiles = new UploadFiles($picture);
        if($uploadFiles){

            $result = $req->sendUpdate($id, $_POST, $tags);
            if ($result) {
                $uploadFiles->uploadInDatabase();
            }else{
                throw new Exception($uploadFiles->getMessageError());
            }
        }
        return false;
    }
}
