<?php

namespace App\Models;

class BottleSql extends ModelSql
{

    protected $table = "bottles";
    

    public function ToRecoverTheBottleTags()
    {
        return $this->query("SELECT t.* FROM tags t
        INNER JOIN bottle_tag bt ON bt.tag_id = t.id
        WHERE bt.bottle_id = ?", [$this->id]);
    }
    public function ToRecoverTheBottleImage()
    {
        return $this->query("SELECT p.* FROM picture p
         INNER JOIN bottle_image bi ON bi.picture_id = p.id 
         WHERE bi.bottles_id = ?", [$this->id]);
    }


    public function create(array $data, ?string $pictureName =null, ?array $relations = null)
    {
        parent::create($data);
        $id = $this->db->getPDO()->lastInsertId();
        foreach ($relations as $tagId) {
            $stmt = $this->db->getPDO()->prepare("INSERT INTO bottle_tag (bottle_id, tag_id) VALUE (?, ?)");
            $stmt->execute([$id, $tagId]);

        }
        $stmt2 = $this->db->getPDO()->query("SELECT * FROM picture");
    
        while ($row = $stmt2->fetch()) {
    
            if($row->{'name'} === $pictureName){
            $pictureId = $row->{'id'};
            }
        }
        //EXCEPTION ISSET pictureId ==False
         $stmt3 = $this->db->getPDO()->prepare("INSERT INTO bottle_image (bottles_id, picture_id) VALUE (?,?)");
         $result =$stmt3->execute([$id, $pictureId]);
         if ($result) {
            return true;
        }
    }
    

    public function sendUpdate(int $id, array $data, ?string $pictureName=null, ?array $relations = null)
    {

        parent::sendUpdate($id, $data);
        $stmt = $this->db->getPDO()->prepare("DELETE FROM bottle_tag WHERE bottle_id = ?");
        $stmt2 = $this->db->getPDO()->prepare("DELETE FROM bottles_image WHERE bottle_id = ?");
        $result = $stmt->execute([$id]);
        foreach ($relations as $tagId) {

            $stmt = $this->db->getPDO()->prepare("INSERT INTO bottle_tag (bottle_id, tag_id) VALUE (?, ?)");
            $stmt->execute([$id, $tagId]);
        }
        $stmt2 = $this->db->getPDO()->query("SELECT * FROM picture");
    
        while ($row = $stmt2->fetch()) {
    
            if($row->{'name'} === $pictureName){
            $pictureId = $row->{'id'};
            }
        }
        $stmt3 = $this->db->getPDO()->prepare("INSERT INTO bottles_image (bottle_id, picture_id) VALUE (?, ?)");
        $stmt3->execute([$id, $pictureId]);

        if ($result) {
            return true;
        }
    }
}