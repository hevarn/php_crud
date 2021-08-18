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
    }
    //gestion des erreur
    public function getMessageError(string $MsgError)
    { 
        $this->MsgError = $MsgError;
        return $this->MsgError;
    }
    //verification
    public function isValid(): bool
    {
        if (!empty($_POST['upload']) && !empty($this->picture) && $this->picture['error'] == 0){
            $verifyImg = getimagesize($this->image['tmp_name']);
            $pattern = "#^(image/)[^\s\n<]+$#i";
            if(!preg_match($pattern, $verifyImg['mine'])){
                $this->getMessageError("merci de telecharger un fichier de type image");
            }
            return true;
        }else{
            $this->getMessageError("champs requis");
        }
        return true;
        
        if ($this->picture['size'] > 4194304) {
            $this->getMessageError("fichier trop grand");
            return false;
        }
        return true;

        if (!in_array(strtolower(pathinfo($this->picture['name'], PATHINFO_EXTENSION)), self::EXT)) {
            $this->getMessageError("le fichier n'est pas une image");
            return false;
        }
        return true;
    }
}
