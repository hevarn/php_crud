<?php

namespace App\Models;

class UploadedPicture
{
    public $picture;
    public $convert;
    public $error = [];
    // private $MsgError;

    // construct
    public function __construct(array $picture)
    {

        $this->picture = $picture;
        return $this->picture;
    }
  
    /* Checks if required PHP extensions are loaded. Tries to load them if not */
    protected function check_Ext()
    {
        $EXT = array('jpg', 'jpeg', 'gif', 'png');
        if(!isset($_FILES['picture'])){
            if (exif_imagetype($this->picture['tmp_name'])){
                if(!in_array(strtolower(pathinfo($this->picture['name'], PATHINFO_EXTENSION)), $EXT)){
                    return $this->error['image'][] = "le fichier";
                }else{
                    return true;
                }
            }else{
                return $this->error['image'][] = " le fichier n'est pas un fichier jpeg ";
            };       
        }else {
            return $this->error['image'][] = " vous devez ajouter une image "; 
        }
    }

    protected function checkSpecialCharacters()
    {
        $verif1 = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/i', $this->picture['name']);
        $verif2 = preg_match('/[1234567890]/',$this->picture['name']);

        if ($verif1 == 0) {
            return true;
            if ($verif2 == 0) {
                return true;
            }else{
               return $this->error['image'][] =  "le nom du fichier ne doit pas contenir de chifre";
            }
        }else{
            return $this->error['image'][] = "le nom fichier ne doit pas contenir de character spetiaux";
        }
    }

    /* Checks if the image isn't to large */

    /* Re-arranges the $_FILES array */
    public function isValid()
    {
        if ($this->check_Ext()[0]) {
            if ($this->picture['size'] < 2000000 ) {
                    if ($this->checkSpecialCharacters()[0]) {
                       return true;
                    }else{
                       return $this->getMessageError();
                    }
            }else {
                return $this->getMessageError();
            }
        } else {
            return $this->getMessageError();
        }
    }
    protected function getMessageError(): ?array
    {
        return $this->error;
    }

 
    
}
