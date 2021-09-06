<?php

namespace App\Models;

class UploadedPicture
{
    public $picture;
    public $convert;
    public $error;
    // private $MsgError;

    // construct
    public function __construct(array $picture)
    {

        $this->picture = $picture;
        return $this->picture;
    }
  
    /* Checks if required PHP extensions are loaded. Tries to load them if not */
    private function check_Ext(): array
    {
        $EXT = array('jpg', 'jpeg', 'gif', 'png');
        if (exif_imagetype($this->picture['tmp_name'])){
            var_dump('pa');
            if(!in_array(strtolower(pathinfo($this->picture['name'], PATHINFO_EXTENSION)), $EXT)){
                return [false, $this->error = "le fichier"];
            }else{
                return [true];
            }
        }else{
            var_dump('p');
            return [false,$this->error = " le fichier n'est pas un ficier jpeg "];
        };        
    }

    private function checkSpecialCharacters(): array
    {
        $verif1 = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/i', $this->picture['name']);
        $verif2 = preg_match('/[1234567890]/',$this->picture['name']);

        if ($verif1 == 0) {
            return [true];
            if ($verif2 == 0) {
                return [true];
            }else{
               return [false,$this->error =  "le nom du fichier ne doit pas contenir de chifre"];
            }
        }else{
            return [false,$this->error = "le nom fichier ne doit pas contenir de character spetiaux"];
        }
    }

    /* Checks if the image isn't to large */

    /* Re-arranges the $_FILES array */
    public function isValid(): array
    {
        if ($this->check_Ext()[0]) {
            if ($this->picture['size'] < 2000000 ) {
                    if ($this->checkSpecialCharacters()[0]) {
                       return [true];
                    }else{
                        return [false,$this->error = "le fichier ne doit pas contenir de character spetiaux ni de chifre"];
                    }
            }else {
                return [false,$this->error = "le fichier est trop grande"];
            }
        } else {
            return [false,$this->error = "le fichier doit etre 'jpg','png','jpeg'"];
        }
    }

 
    
}
