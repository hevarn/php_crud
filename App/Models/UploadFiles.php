<?php

namespace App\Models;

class UploadFiles
{

    public function upload(array $picture)
    {
        $picture = $_FILES['picture'];
        $ext = array('jpg', 'jpeg', 'gif', 'png');


        if (empty($picture) && isset($picture)) {
            $msg_error = header('Error: /projetZero/formAdmin/?error=true');
        } elseif ($picture['size'] > 4194304) {
            $msg_error = "fichier trop grand";
        } elseif (!in_array(strtolower(pathinfo($picture['name'], PATHINFO_EXTENSION)), $ext)) {
            $msg_error = "le fichier n'est pas une image";
        } else {
            $picture_name  = uniqid() . '_' . $picture['name'];
            $img_folder = (ASSETS . 'assets' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $picture_name);
            @mkdir($img_folder, 0777);
            $dir = $img_folder . $picture_name;
            if (file_exists($img_folder)) {
                $move_file = @move_uploaded_file($picture_name, $dir);
                if (!$move_file) {
                    $msg_error = "probleme de Transfer à la base de donnée ";
                }
            }
        }
        if (isset($msg_error)) {
            header("Location: /projetZero/formAdmin/?success=true");
        }
    }
}
