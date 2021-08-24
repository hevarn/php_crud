<?php

namespace App\Models;

use Exception;

class UploadedPicture
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
                $errors = "merci de telecharger un fichier de type image";
                header("Location: /projetZero/Admin/formAdmin?error=$errors");
            }
            return true;
        }else{
            $errors = "champs requis";
            header("Location: /projetZero/Admin/formAdmin?error=$errors");
        }
        return true;
        
        if ($this->picture['size'] > 4194304) {

            $errors = "fichier trop grand";
            header("Location: /projetZero/Admin/formAdmin?error=$errors");
            return false;
        }
        return true;
        
        if (!in_array(strtolower(pathinfo($this->picture['name'], PATHINFO_EXTENSION)), self::EXT)) {
            $errors = "le fichier n'est pas une image";
            header("Location: index.php?error=$errors");
            return false;
        }
        return true;
    }

    public function getMessageError():string
    { 
        return $this->MsgError;
    }
}
