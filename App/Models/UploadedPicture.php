<?php

namespace App\Models;

class UploadedPicture
{
    const EXT = array('jpg', 'jpeg', 'gif', 'png');
    public $picture;
    public $convert;
    // private $MsgError;

    // construct
    public function __construct(array $picture)
    {
        $this->picture = $picture;
        return $this->picture;
    }
    //gestion des erreur
    //verification
    /* Checks if required PHP extensions are loaded. Tries to load them if not */
    private function check_phpExt(): bool
    {
        $check = getimagesize($this->picture["tmp_name"]);
        if ($check !== false) {
           return true;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    private function checkSpecialCharacters(): bool
    {
        $verif1 = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/i', $this->picture['name']);
        $verif2 = preg_match('/[1234567890]/',$this->picture['name']);

        if ($verif1 == 0) {
            return true;
            if ($verif2 == 0) {
                return true;
            }else{
               echo "le nom du fichier ne doit pas contenir de chifre";
            }
        }else{
            echo"le nom fichier ne doit pas contenir de character spetiaux";
        }
    }

    private function check_img_mime()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mtype = finfo_file($finfo, $this->picture["tmp_name"]);
        $this->mtype = $mtype;
        if (strpos($mtype, 'image/') === 0) {
            return true;
        } else {
            echo "ce fichier n'est pas une image";
        }
        finfo_close($finfo);
    }

    /* Checks if the image isn't to large */

    /* Re-arranges the $_FILES array */
    public function isValid(): bool
    {

        if ($this->check_phpExt()) {
            if ($this->picture['size'] > 250000 ) {
                if ($this->check_img_mime()) {
                    if ($this->checkSpecialCharacters()) {
                       return true;
                    }else{
                        echo"le fichier ne doit pas contenir de character spetiaux ni de chifre";
                        return false;
                    }
                }else{
                    echo"le fichier doit etre un image";
                    return false;
                }
            }else {
                echo"le fichier est trop grande";
                return false;
            }
        } else {
            echo"le fichier doit etre 'jpg','png','jpeg'";
            return false;
        }
    }
}
