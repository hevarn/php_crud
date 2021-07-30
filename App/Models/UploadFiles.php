<?php

namespace App\Models;

use Exception;

class UploadFiles extends UploadedPicture
{
    private $picture_name;
    private $img_folder;
    private $dir;
    private $tmp;



    public function __construct($picture_name, $tmp)
    {
        $this->tmp= $tmp;
        $this->picture_name  = $picture_name;
        $this->img_folder = (ASSETS . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR);
        @mkdir($this->img_folder, 0777);
        $this->dir = $this->img_folder.uniqid();
    }

    public function uniqid(){
        $uniq = uniqid() . '_' .$this->picture_name;
    }

    public function upload()
    {
        file_exists($this->dir)?
        $this->setMessageError('le fichier exist déjâ'):
        $move_file = @move_uploaded_file($this->tmp, $this->dir);

        if ($move_file !==false){
            // regarder pour faire un new pdo pour insere la photo 
            $insert = $this->db->query("INSERT into bottle (file_name, uploaded_on) VALUES ('".$this->picture_name."', NOW())");
            $this->setMessageError('le fichier à bien été télécharger');
        }

    }
}
