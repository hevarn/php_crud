<?php

namespace App\Manager;

use Database\DBtrait;
use App\Models\ImageSql;
use App\Models\UploadFiles;
use App\Models\UploadedPicture;

class PictureManager
{
    use DBtrait;
    public function __construct($picture)
    {
        $this->picture = $picture;
        return $this->picture;
    }
    public function manage($id):bool
    {
        $this->picture = $_FILES['picture'];
        $uploadedPicture = new UploadedPicture($this->picture);
        if (!$uploadedPicture->isValid()) {
            return false;
        }
        $uploadFiles = new UploadFiles($this->picture);
        $uploadFiles->uploadInFolder($this->picture);
        $req = (new ImageSql($this->getDB()));
        $result = $req->sendUpdate($id,$this->picture);
        if(!$result){
            return false;
        }
        var_dump("prout");c
        var_dump($req);die();
        return true;
    }
}
