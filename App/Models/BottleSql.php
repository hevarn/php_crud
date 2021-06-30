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
        WHERE bt.bottle_id = ?", $this->id);
    }
}
