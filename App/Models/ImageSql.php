<?php

namespace App\Models;

class ImageSql extends ModelSql{

    protected $table = "picture";

    public function  CreateImageInToDatabase(array $picture){
    
        $picName = $picture['name'];
        $picType = $picture['type'];
        $picTmp = $picture['tmp_name'];
        $picError = $picture['error'];
        $picSize = $picture['size'];
    
        $stmt = $this->db->getPDO()->prepare("INSERT INTO {$this->table} (name, type, tmp_name, error, size) VALUE (?,?,?,?,?)");
        $resultStmt = $stmt->execute(array($picName,$picType,$picTmp,$picError,$picSize));    
        if ($resultStmt){
            return true;
        }
    }
}