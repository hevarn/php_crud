<?php

namespace App\Models;

use App\Models\ImageSql;
use App\Models\UploadedPicture;

class UploadFiles extends UploadedPicture
{
    private $picture;
    private $img_folder;
    private $dir;
    private $tmp;

    public function __construct($picture)
    {
        $tmp = $this->picture['tmp_name'];
        $this->tmp = $tmp;
        $this->picture  = $picture;
        $this->img_folder = (ASSETS . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR);
        @mkdir($this->img_folder, 0777);
        $this->dir = $this->img_folder.uniqid();
    }

    public function uniqid(){
        $uniq = uniqid() . '_' .$this->picture['name'];
    }
    
    public function uploadInDatabase()
    {
        $move_file = @move_uploaded_file($this->tmp, $this->dir);
        if ($move_file !==false){
            die('transfere du fichier dans le dossier à echoué');
        }
    }

    public function CreateImageInToDatabase(){
        $res = (new ImageSql($this->getDB()))->create($_FILES);
        if (!$res){
            die("le fichier n'a pas été téléchargé");
            return false;
        }
        return true;
    }
    

}
