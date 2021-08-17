<?php

namespace App\Models;

use Exception;

class UploadedPicture extends Exception
{
    const EXT = array('jpg', 'jpeg', 'gif', 'png');
    private $picture;
    private $MsgError;

    public function __construct(array $picture){
        $this->picture =$picture;
    }
    
    // public function getName()
    // {
    //     return $this->picture['name'];
    // }
    // public function getSize()
    // {
    //     return $this->picture['size'];
    // }
    // public function getError(){
        
    //     return $this->picture['error'];
    // }
    // message error
    public function setMessageError(string $MsgError){
        $this->MsgError = $MsgError;
    }
    public function getMessageError()
    {
        return $this->MsgError;
    }

    public function isValid(): bool
    {
        if (!empty($_POST['upload']) && !empty($this->picture) && $this->picture['error'] == 0){
            $verifyImg = getimagesize($this->image['tmp_name']);
            $pattern = "#^(image/)[^\s\n<]+$#i";
            if(!preg_match($pattern, $verifyImg['mine'])){
                die("merci de telecharger un fichier de type image");
            }
            return true;
        }else{
            $this->setMessageError("champs requis");
        }

        if ($this->picture['size'] > 4194304) {
            $this->setMessageError("fichier trop grand");
            return false;
        }
        return true;

        if (!in_array(strtolower(pathinfo($this->picture['name'], PATHINFO_EXTENSION)), self::EXT)) {
            $this->setMessageError("le fichier n'est pas une image");
            return false;
        }
        return true;
    }
}
