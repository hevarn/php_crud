<?php

namespace App\Controller;

use App\Models\Tags;
use App\Models\BottleSql;
use App\Controller\Controller;

class BlogController extends Controller
{


    public function homePage()
    {
        return $this->view('blog/homePage');
    }

    public function indexArticle(){

        $req = new BottleSql($this->getDB());
        $reqs = $req->all();
        return $this->view('blog/indexArticle', compact('reqs'));
    }
    public function showArticle(int $id){

        $req = new BottleSql($this->getDB());
        $req = $req->findById($id);
        
        return $this->view('blog/showArticle', compact('req'));
    }
    public function tag(int $id){
   
        $tag = (new Tags($this->getDB()))->findById($id);
        return $this->view('blog/showTag', compact('tag'));

    
    }
}
