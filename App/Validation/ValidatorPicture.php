<?php 
namespace App\Validation;

class ValidatorPicture{
    private $data;
    private $errors = [];

    public function __construct(array $data)
    {
        $this->data = $data;
        return $this->data; 
    }
    public function validatePicture(array $rules): ?array
    {
        
        foreach ($rules as $name => $rulesArray) {
            if (array_key_exists($name, $this->data)) {
                foreach ($rulesArray as $rules) {
                    switch ($rules) {
                        case 'required':
                            $this->required($name, 
                            $this->data['picture']['name']);
                            break;
                        case 'checkValidePictureName':
                            $this->checkValidePictureName($name, 
                            $this->data['picture']['name']);
                            break;
                        case 'size':
                            $this->size($name, 
                            $this->data['picture']['size']);
                            break;
                        case 'checkEXT';
                            $this->checkExt($name, 
                            $this->data['picture']['name']);
                        case 'checkInsideFile';
                            $this->checkInsideFile($name, 
                            $this->data['picture']['tmp_name']);
                        default:
                            break;
                    }
                }
            }
        }
        return $this->getMessageError();
    }
    private function required(string $name, string $value){
        if (!isset($value) || is_null($value) || empty($value)) {
            $this->errors[$name][] = "{$name} est requis.";
        }
    }
    private function checkValidePictureName(string $name, string $value){
        if(preg_match('/(?=.*[@#\$%^&+=§!\?])/',$value)) {
            $this->errors[$name][] = "
            la {$name} ne doit pas contenir de caractères spéciaux";
        }
    }
    private function size(string $name, string $value){
        if($value > 2000000){
            $this->errors[$name][] =" 
            la taille {$name} est trop grand merci de choisir un fichier inferieur à '2MO'";
        }

    }
    private function checkInsideFile(string $name, string $value){
        if(!empty($value)){
            if(exif_imagetype($value) == false){
                $this->errors[$name][] =" 
                le corronpu merci de choisir un autre fichier";
            }
        }
    }

    private function checkExt(string $name, string $value)
    {
        $EXT = array('jpg', 'jpeg', 'png');
        if(!in_array(strtolower(pathinfo($value,PATHINFO_EXTENSION)), $EXT)){
            return $this->error[$name][] = " l'{$name} doit être un 'JPG'.'JPEG'.'PNG' ";
        }
    }
    
    private function getMessageError(): ?array
    {
        return $this->errors;
    }

}