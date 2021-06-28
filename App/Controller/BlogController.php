<?php 
namespace App\Controller;

class BlogController extends Controller{


    public function homePage(){
       return $this->view('blog/homePage');
    }
    public function indexArticle(){
       return $this->view('blog/indexArticle');
    }
    public function showArticle($id){
        $req = $this->db->getPDO()->query('SELECT * FROM posts');
        $posts = $req->fetchAll();
        foreach($posts as $post){
            echo $post->title;
        }
        return $this->view('blog/show', compact('id'));
    }

}
