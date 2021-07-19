<?php
namespace App\Controller\Admin;

use App\Models\BottleSql;
use App\Controller\Controller;
use App\Models\Tags;
use App\Models\UploadFiles;

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
        $req = new BottleSql($this->getDB());
        $tags = array_pop($_POST);
        $picture = new UploadFiles($this->getDB());
        $result = $req->sendUpdate($id, $picture, $_POST, $tags);

        if($result){
            return header("Location: /projetZero/admin/panel");
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