<?php

namespace App\Models;


use App\Models\UploadedPicture;


class UploadFiles extends UploadedPicture
{
    private $picture;
    private $img_folder;
    private $dir;
    private $tmp;   
    private $uniq;
    
    public function __construct($picture){
        $this->picture = $picture;
        $uniq = uniqid("IMG-", true) . '.' .$this->picture['name'];
        $this->uniq = $uniq;
    } 

    public function getUniqPictureId(){
        return $this->uniq;
    }
    public function uploadInFolder()
    {
        $tmp = $this->picture['tmp_name'];
        $this->tmp = $tmp;
        $this->img_folder = (ASSETS . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR);
        @mkdir($this->img_folder, 0777);

        $this->dir = $this->img_folder.$this->uniq;
        
        var_dump($this->dir);die();
        $move_file = @move_uploaded_file($this->tmp, $this->dir);
        if(!$move_file){
            return False;
        }
        return true;
    }
    // transform in binary format
    public function textBinASCII(string $text){
        $bin = array();
        for($i=0; strlen($text)>$i; $i++)
            $bin[] = decbin(ord($text[$i]));
    
        return implode(' ',$bin);
    }
    
    public function ASCIIBinText(int $bin){
        $text = array();
        $bin = explode(" ", $bin);
        for($i=0; count($bin)>$i; $i++)
            $text[] = chr(bindec($bin[$i]));
            
        return implode($text);
    }
}
