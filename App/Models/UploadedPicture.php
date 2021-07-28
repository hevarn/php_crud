<?php

namespace App\Models;

class UploadedPicture
{
    const EXT = array('jpg', 'jpeg', 'gif', 'png');
    private $picture;
    private $msg_error;
    private $name;
    private $size;

    public function setName(string $name)
    {
        $name = $_FILES['picture']['name'];
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPicture(string $picture)
    {  
        $picture = $_FILES['picture'];
        $this->picture = $picture;
        return $this;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setMessageError(string $msg_error)
    {
        $msg_error = $_FILES['picture']['error'];
        $this->msg_error = $msg_error;
        return $this;
    }
    public function getMessageError()
    {
        return $this->msg_error;
    }

    public function setSize(string $size)
    {
        $size = $_FILES['picture']['size'];
        $this->size = $size;
        return $this;
    }
    public function getSize()
    {
        return $this->size;
    }

    public function isValid(): bool
    {
        if (empty($this->picture) && isset($this->picture)) {
            $this->setMessageError("champs requis");
            return false;
        }

        if ($this->size > 4194304) {
            $this->setMessageError("fichier trop grand");
            return false;
        }

        if (!in_array(strtolower(pathinfo($this->name, PATHINFO_EXTENSION)), self::EXT)) {
            $this->setMessageError("le fichier n'est pas une image");
            return false;
        }

        return true;
    }
}
