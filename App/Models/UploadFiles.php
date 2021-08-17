<?php

namespace App\Models;

use Database\DbConnection;

class UploadFiles extends UploadedPicture
{
    private $picture;
    private $img_folder;
    private $dir;
    private $tmp;



    public function __construct(DBconnection $picture)
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
        
        }
    }
}
