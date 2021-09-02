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
    public function ToRecoverTheBottleImage()
    {
        return $this->query("SELECT p.* FROM picture p
         INNER JOIN bottle_image bi ON bi.picture_id = p.id 
         WHERE bi.bottles_id = ?", [$this->id]);
    }
   

}