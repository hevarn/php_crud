<?php

namespace App\Models;

class ImageSql extends ModelSql{

    protected $table = "image";

    public function CreateImageInToDatabase(array $data){
        parent::create($data);
        $stmt = $this->db->getPDO()->lastInsertId();
        $stmt = $this->db->getPDO()->prepare("INSERT INTO picture (name, taille, type, bin) VALUE (?, ?, ?, ?)");
        $stmt->execute(array($_FILES['image']['name'],$_FILES['image']['size'],$_FILES['image']['type'],file_get_contents($_FILES['image']['tmp_name'])));
    }
}