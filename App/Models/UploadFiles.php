<?php

namespace App\Models;


use App\Models\UploadedPicture;


class UploadFiles extends UploadedPicture
{
    private $picture;
    private $img_folder;
    private $dir;
    private $tmp;   
    
    public function __construct($picture){
        $this->picture = $picture;
        return $this->picture;
        
    } 
    public function uploadInFolder()
    {
        $tmp = $this->picture['tmp_name'];
        $this->tmp = $tmp;
        $this->img_folder = (ASSETS . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR);
        @mkdir($this->img_folder, 0777);

        $uniq = uniqid() . '_' .$this->picture['name'];
        $this->dir = $this->img_folder.$uniq;

        $move_file = @move_uploaded_file($this->tmp, $this->dir);
        if(!$move_file){
            return False;
        }
        return true;
    }
}
