<?php 
namespace App\Controller;

class BlogController extends Controller{


    public function homePage(){
        
       return $this->view('blog/homePage');
    }
    public function indexArticle(){
        $stmt = $this->db->getPDO()->query('SELECT * FROM bottles');
        $posts = $stmt->fetchAll();
       return $this->view('blog/indexArticle', compact('posts'));
    }
    public function showArticle($id){
        $req = $this->db->getPDO()->query('SELECT * FROM bottles');
        $posts = $req->fetchAll();
        foreach($posts as $post){
            echo $post->name;
        }
        return $this->view('blog/showArticle', compact('id'));
    }

}
