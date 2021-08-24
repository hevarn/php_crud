<?php

namespace App\Models;

class BottleSql extends ModelSql
{

    protected $table = "bottles";
    // public function getExcerpt():string{
    //     return substr($this->content, 0, 150).'....';
    // }

    //     public function getButton():string{
    //         return <<<HTML
    //         <a href="/projetFinal/posts/$this->id" class="btn btn-primary" >lire plus </a>
    // HTML;

    //     }

    public function ToRecoverTheBottleTags()
    {
        return $this->query("SELECT t.* FROM tags t
        INNER JOIN bottle_tag bt ON bt.tag_id = t.id
        WHERE bt.bottle_id = ?", [$this->id]);
    }
    public function ToRecoverTheBottleImage()
    {
        return $this->query("SELECT p* FROM picture p
         INNER JOIN bottle_image bi ON bi.picture_id = p.id 
         WHERE bi.bottle_id = ?", [$this->id]);
    }


    public function sendDataForCreate(array $data, ?string $pictureUniqId, ?array $relations = null)
    {
        parent::create($data);
        $id = $this->db->getPDO()->lastInsertId();
        foreach ($relations as $tagId) {
            $stmt = $this->db->getPDO()->prepare("INSERT INTO bottle_tag (bottle_id, tag_id) VALUE (?, ?)");
            $stmt->execute([$id, $tagId]);
        }
        $stmt2 = $this->db->getPDO()->prepare("INSERT INTO bottle_image (bottle_id, picture_id) VALUE (?,?)");
        $stmt2->execute([$id, $pictureUniqId]);
    }
    

    public function sendDataForUpdate(int $id, array $data, ?string $pictureUniqId, ?array $relations = null)
    {

        parent::sendUpdate($id, $data);
        $stmt = $this->db->getPDO()->prepare("DELETE FROM bottle_tag WHERE bottle_id = ?");
        $stmt2 = $this->db->getPDO()->prepare("DELETE FROM bottle_image WHERE bottle_id = ?");
        $result = $stmt->execute([$id]);
        $result2 = $stmt2->execute([$id]);
        foreach ($relations as $tagId) {

            $stmt = $this->db->getPDO()->prepare("INSERT INTO bottle_tag (bottle_id, tag_id) VALUE (?, ?)");
            $stmt->execute([$id, $tagId]);
        }
        
        $stmt2 = $this->db->getPDO()->prepare("INSERT INTO bottle_image (bottle_id, picture_id) VALUE (?, ?)");
        $stmt2->execute([$id, $pictureUniqId]);

        if ($result && $result2) {
            return true;
        }
    }
}
