<?php

namespace App\Controller\Admin;

use App\Models\Tags;
use App\Models\ImageSql;
use App\Models\BottleSql;
use App\Models\UploadFiles;
use App\Validation\Validator;
use App\Controller\Controller;
use App\Manager\PictureManager;
use App\Validation\ValidatorPicture;

class AdminController extends Controller
{

    /**
     * elle fait un foreach sur tout les bouteilles en BDD pour les
     * afficher dans la vue admin
     */
    public function index()
    {
        $this->isAdmin();

        $req = new BottleSql($this->getDB());
        $reqs = $req->all();
        // setcookie('user', 'admin', time() + 60 * 60 * 24);
        return $this->view('Admin/indexAdmin', compact('reqs'));
    }

    /**
     * génére une template qui affichera la "CRUD" 
     */
    public function generateTemplateCreate()
    {
        $this->isAdmin();
        $tags = (new Tags($this->getDB()))->all();
        return $this->view('admin/formAdmin', compact('tags'));
    }
    /**
     * function appelé via formulaire pour créé une bouteille 
     */
    public function sendDataForCreate()
    {
        $this->isAdmin();
        // instancie le validateur pour la picture
        $pictureFiles = new ValidatorPicture($_FILES);
        $errors = $pictureFiles->validatePicture([
            'picture' => ['required','checkInsideFile',
                          'checkEXT','checkValidePictureName',
                          'size']
        ]);
        if($errors){
            $_SESSION['errors'][] = $errors;
            return header("Location: /projetZero/admin/panel/create");
            exit();
        }
        // instancie le validateur pour le form 
        $checkDataForm = new Validator($_POST);
        $errors = $checkDataForm->validate([
            'name' => ['required', 'min:3', 'notSpecialCaractere'],
            'year' => ['limiYear'],
            'grapes' => ['required','notSpecialCaractere'],
            'contry' => ['required','notSpecialCaractere'],
            'region' => ['required','notSpecialCaractere'],
            'description' => ['required','notSpecialCaractere']
        ]);
        if($errors){
            $_SESSION['errors'][] = $errors;
            return header("Location: /projetZero/admin/panel/create");
            exit();
        }
        // instancie UploadFiles pour envoyer la picture dans le dossier image 
        $uploadFiles = (new UploadFiles($_FILES['picture']))->uploadInFolder();
        // instancie ImageSql pour envoyer la picture dasn la BDD
        $imageSend = new ImageSql($this->getDB());
        $resultImageSend = $imageSend->CreateImageInToDatabase($uploadFiles);
        if($resultImageSend){
            // instancie BottleSql pour envoyer les "data" en "BDD"  
            $req = new BottleSql($this->getDB());
            $tags = array_pop($_POST);
            $result = $req->create($_POST, $uploadFiles, $tags);
            if ($result) {
                var_dump($result);
                return header("Location: /projetZero/admin/panel");
            } else {
                return header("Location: /projetZero/admin/panel/valid");
            }
        }
    }
    

    public function generateTemplateForModify(int $id)
    {
        $this->isAdmin();
        $req = (new BottleSql($this->getDB()))->findById($id);
        $tags = (new Tags($this->getDB()))->all();
        return $this->view('Admin/formAdmin', compact('req', 'tags'));
    }


    public function sendDataForUpdate(int $id)
    {
        $this->isAdmin();
        // validateur pour la picture
        $pictureFiles = new ValidatorPicture($_FILES);
        $errors = $pictureFiles->validatePicture([
            'picture' => ['required','checkInsideFile','checkEXT','checkValidePictureName','size']
        ]);
        if($errors){
            $_SESSION['errors'][] = $errors;
            return header("Location: /projetZero/admin/panel/create");
            exit();
        }
        // le validateur pour le form
        $checkDataForm = new Validator($_POST);
        $errors = $checkDataForm->validate([
            'name' => ['required', 'min:3', 'notSpecialCaractere'],
            'year' => ['limiYear'],
            'grapes' => ['required','notSpecialCaractere'],
            'contry' => ['required','notSpecialCaractere'],
            'region' => ['required','notSpecialCaractere'],
            'description' => ['required','notSpecialCaractere']
        ]);
        if($errors){
            $_SESSION['errors'][] = $errors;
            return header("Location: /projetZero/admin/panel/create");
            exit();
        }
        $uploadFiles = (new UploadFiles($_FILES['picture']))->uploadInFolder();
        $imageSend = new ImageSql($this->getDB());
        $resultImageSend = $imageSend->CreateImageInToDatabase($uploadFiles);
        if($resultImageSend){
            $req = new BottleSql($this->getDB());
            $tags = array_pop($_POST);
            $result = $req->sendUpdate($id, $_POST, $uploadFiles, $tags);
            if ($result) {
                return header("Location: /projetZero/admin/panel?=success");
            } else {
                return header("Location: /projetZero/admin/panel/modify/$id");
            }
        }
    }

    public function destroy(int $id)
    {
        $this->isAdmin();
        $req = new BottleSql($this->getDB());
        $result = $req->destroy($id);

        if ($result) {
            return header("Location: /projetZero/admin/panel");
        }
    }
}
