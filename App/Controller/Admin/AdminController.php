<?php
namespace App\Controller\Admin;

use App\Models\Tags;
use App\Models\BottleSql;
use App\Models\UploadFiles;
use App\Controller\Controller;
use App\Manager\PictureManager;
use App\Models\UploadedPicture;

class AdminController extends Controller {
    
    public function index() {
        $this->isAdmin();
        $req = new BottleSql($this->getDB());
        $reqs = $req->all();
        return $this->view('Admin/indexAdmin', compact('reqs'));
    }
    public function generateTemplateCreate(){
        $this->isAdmin();
        $tags = (new Tags($this->getDB()))->all();
        return $this->view('admin/formAdmin', compact('tags'));
    }
    public function sendDataForCreate(){
        $this->isAdmin();
        $req = new BottleSql($this->getDB());
        $tags = array_pop($_POST);
        $result = $req->create($_POST, $tags);
        if($result){
            return header("Location: /projetZero/admin/panel");
        }
    }
    public function generateTemplateForModify(int $id) {
        $this->isAdmin();
        $req = (new BottleSql($this->getDB()))->findById($id);
        $tags = (new Tags($this->getDB()))->all();
        return $this->view('Admin/formAdmin', compact('req','tags'));
    }
  
    public function sendDataForUpdate(int $id) {
        $this->isAdmin();
        $pictureManager = new PictureManager($_FILES['picture']);
        $pictureManager->manage($id);
        if($pictureManager->manage($id) == true){
            $req = new BottleSql($this->getDB());
            $tags = array_pop($_POST);
            $result = $req->sendUpdate($id, $_POST, $tags);
            if($result){
                return header("Location: /projetZero/admin/panel?=success");
            };
            return header("Location: /projetZero/admin/panel/modify/$id");
        }
    }
    
    public function destroy(int $id) {
        $this->isAdmin();
        $req = new BottleSql($this->getDB());
        $result = $req->destroy($id);
        
        if($result){
            return header("Location: /projetZero/admin/panel");
        }
    }


}

