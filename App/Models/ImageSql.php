<?php

namespace App\Models;

class ImageSql extends ModelSql{

    protected $table = "picture";

    public function CreateImageInToDatabase(array $stmt){

        $stmt = $this->db->getPDO()->lastInsertId();
        $stmt = $this->db->getPDO()->prepare("INSERT INTO picture (name, taille, type, bin) VALUE ({$_FILES['image']['name']}, {$_FILES['image']['size']}, {$_FILES['image']['type']}, {file_get_contents($_FILES['image']['tmp_name']})");
        $stmt->execute();
        var_dump($stmt);die();
        
    }
}