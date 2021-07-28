<?php

namespace App\Models;

class UploadedPicture
{
    const EXT = array('jpg', 'jpeg', 'gif', 'png');
    private $picture;
    private $MsgError;

    public function __construct(array $picture){
        $this->picture =$picture;
    }
    public function getName()
    {
        return $this->picture['name'];
    }
    public function getPicture()
    {
        return $this->picture;
    }
    public function setMessageError(string $MsgError){
        $this->MsgError = $MsgError;
    }
    public function getMessageError()
    {
        return $this->MsgError;
    }
    public function getSize()
    {
        return $this->picture['size'];
    }

    public function isValid(): bool
    {
        if (empty($this->picture) && isset($this->picture)) {
            $this->setMessageError("champs requis");
            return false;
        }

        if ($this->getSize() > 4194304) {
            $this->setMessageError("fichier trop grand");
            return false;
        }

        if (!in_array(strtolower(pathinfo($this->getName(), PATHINFO_EXTENSION)), self::EXT)) {
            $this->setMessageError("le fichier n'est pas une image");
            return false;
        }

        return true;
    }
}
