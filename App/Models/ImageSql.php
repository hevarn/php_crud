<?php

namespace App\Models;

class ImageSql extends ModelSql{

    protected $table = "picture";

    public function  CreateImageInToDatabase($picture){
    
        $picName = $picture;

        $stmt = $this->db->getPDO()->prepare("INSERT INTO {$this->table} (name) VALUE (?)");
        $resultStmt = $stmt->execute(array($picName));    
        if ($resultStmt){
            return true;
        }
    }
    public function  UpdateImageInToDatabase($picture){
    
        $picName = $picture;
        $stmt = $this->db->getPDO()->prepare("DELETE FROM {$this->table} WHERE id = ?");
        $stmt = $this->db->getPDO()->prepare("INSERT INTO {$this->table} (name) VALUE (?)");
        $resultStmt = $stmt->execute(array($picName));    
        if ($resultStmt){
            return true;
        }
    }

    public function ToRecoverTheBottleImage(){
        return $this->query("SELECT p* FROM picture p INNER JOIN bottle_image bi ON bi.picture_id = p.id WHERE bi.bottle_id = ?", [$this->id]);
    }
}