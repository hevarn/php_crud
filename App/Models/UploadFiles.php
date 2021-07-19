<?php
namespace App\Models;

class UploadFiles extends ModelSql {

     public function upload(string $picture){
        $picture = $_FILES['picture'];
        $ext = array('jpg', 'jpeg', 'gif', 'png');
        if ($picture['error'] > 0 && $picture['error'] < 3){
            $msg_error = "taille du fichier trop grande ";
        } elseif ($picture['error'] == 3 || $picture['error'] > 4){
            $msg_error = "probleme de telechargement";
        }else{
            if ($picture['error'] == 4){$picture_name ='generic.jpg';
            $set_request = TRUE;
            }else{
                if ($picture['size'] > 4194304){
                    $msg_error = "fichier trop grand";
                } elseif (!in_array(strtolower(pathinfo($picture['name'], PATHINFO_EXTENSION)), $ext)){
                    $msg_error = "le fichier n'est pas une image";
                }else{
                    $picture_name  = uniqid() . '_' . $picture['name'];
                    $img_folder = (ASSETS. DIRECTORY_SEPARATOR .'img'.DIRECTORY_SEPARATOR.$picture_name);
                    @mkdir($img_folder,0775);
                    $dir = $img_folder .$picture_name;
                    $move_file = @move_uploaded_file($picture['tmp_name'], $dir);
                    if (!$move_file){
                        $msg_error = "probleme de Transfer à la base de donnée ";
                    }else{
                        $set_request = TRUE;
                    }
                }
            } 
        }
        if(isset($msg_error)) {
            header("Location: /projetZero/formAdmin/?success=true");
        }elseif ($set_request){
            header("Location: /projetZero/formAdmin/?success=true");
        }
                              
    }
}