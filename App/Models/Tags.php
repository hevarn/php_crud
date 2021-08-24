<?php
namespace App\Models;

class Tags extends ModelSql{

   protected $table = "tags";

    public function ToRecoverTheBottlesFromTheTags(){
        return $this->query("SELECT b.* FROM bottles b
                            INNER JOIN bottle_tag bt ON bt.bottle_id = b.id 
                            WHERE bt.tag_id = ?
                            ", [$this->id]);
    }
    public function ToRecoverTheImageFromTheTags(){
        return $this->query("SELECT p.* FROM picture p
                            INNER JOIN bottle_tag bt ON bt.picture_id = b.id 
                            WHERE bt.tag_id = ?
                            ", [$this->id]);
    }

}