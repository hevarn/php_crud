<?php

namespace App\Models;

use Exception;

class UploadedPicture extends Exception
{
    const EXT = array('jpg', 'jpeg', 'gif', 'png');
    private $picture;
    private $MsgError;

    // construct
    public function __construct(array $picture){
        $this->picture =$picture;
        return $this->picture;
    }
    //gestion des erreur
    //verification
    public function isValid(): bool
    {
        if (!empty($_FILES['upload']) && !empty($this->picture) && $this->picture['error'] == 0){
            $verifyImg = getimagesize($this->image['tmp_name']);
            $pattern = "#^(image/)[^\s\n<]+$#i";
            if(!preg_match($pattern, $verifyImg['mine'])){
                $this->MsgError = "merci de telecharger un fichier de type image";
                $_SESSION['error'] = $this->MsgError;
            }
            return true;
        }else{
            $this->MsgError = "champs requis";
            $_SESSION['error'] = $this->MsgError;
        }
        return true;
        
        if ($this->picture['size'] > 4194304) {
            $this->MsgError = "fichier trop grand";
            $_SESSION['error'] = $this->MsgError;
            return false;
        }
        return true;
        
        if (!in_array(strtolower(pathinfo($this->picture['name'], PATHINFO_EXTENSION)), self::EXT)) {
            $this->MsgError = "le fichier n'est pas une image";
            $_SESSION['error'] = $this->MsgError;
            return false;
        }
        return true;
    }

    public function getMessageError():string
    { 
        return $this->MsgError;
    }
}
