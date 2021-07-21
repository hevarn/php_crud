<?php 

namespace App\Models;

class UploadedPicture{
    
    

    const EXT = array('jpg', 'jpeg', 'gif', 'png');
    private $picture;
    private $msg_error;
    private $name;

    // get + set pour name
    
    public function __construct($picture)
    {
        $this->picture = $picture;
    }
    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setPicture($picture){
        $this->picture = $picture ;
        return $this;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function setMessageError($msg_error){
        $this->msg_error = $msg_error;
        return $this;
    }
    public function getMessageError(){
        return $this->msg_error;
    }

    public function isValid():bool
    {
        if (empty($this->picture) && isset($this->picture)) {
            $this->setMessageError("champs requis"); 
            return false;
        }

        // if ($this->picture['size'] > 4194304) {
        //     $this->setMessageError("fichier trop grand"); 
        //     return false;
        // }
        
        // if (!in_array(strtolower(pathinfo($this->picture['name'], PATHINFO_EXTENSION)),self::EXT)) {
        //     $this->setMessageError("le fichier n'est pas une image"); 
        //     return false;
        // } 

        return true;
    
    }
}