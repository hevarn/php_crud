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
    public function sendDataForCreate(array $data,?array $relations = null){
        parent::create($data);
        $id = $this->db->getPDO()->lastInsertId();
        foreach($relations as $tagId){
            $stmt = $this->db->getPDO()->prepare("INSERT INTO bottle_tag (bottle_id, tag_id) VALUE (?, ?)");
            $stmt->execute([$id,$tagId]);
        }
    }

    public function sendDataForUpdate(int $id, array $data,?array $relations = null){

        parent::sendUpdate($id, $data);
        $stmt = $this->db->getPDO()->prepare("DELETE FROM bottle_tag WHERE bottle_id = ?");
        $result = $stmt->execute([$id]);
        foreach($relations as $tagId){

            $stmt = $this->db->getPDO()->prepare("INSERT INTO bottle_tag (bottle_id, tag_id) VALUE (?, ?)");
            $stmt->execute([$id,$tagId]);
        }

        if($result){
           return true;
        }

    }
   
}
