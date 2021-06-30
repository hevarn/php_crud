<?php
namespace App\Controller\Admin;

use App\Models\BottleSql;
use App\Controller\Controller;

class AdminController extends Controller {
    
    public function index() {
        $req = new BottleSql($this->getDB());
        $reqs = $req->all();
        return $this->view('blog/Admin/indexAdmin', compact('reqs'));
    }
}