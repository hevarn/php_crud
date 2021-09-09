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

    public function indexArticle()
    {

        $req = new BottleSql($this->getDB());
        $reqs = $req->all();
        return $this->view('blog/indexArticle', compact('reqs'));
    }
    public function showArticle(int $id)
    {

        $req = new BottleSql($this->getDB());
        $req = $req->findById($id);
        return $this->view('blog/showArticle', compact('req'));
    }
    public function tag(int $id)
    {
        $tag = (new Tags($this->getDB()))->findById($id);
        return $this->view('blog/showTag', compact('tag'));
    }

    public function mycave(){
        return $this->view('blog/mycave');
    }

    public function cookie()
    {
    
        if($_GET['visitorname']){
            $name = $_GET['visitorname'];
        }else {
            $name = 'VISITOR';
        }
        setcookie('accaccept_cookie', $name, time() + 365 * 24 * 3600, '/', null, null, true);
        if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
            header('location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            header('location: /projetZero');
        }
    }
}
