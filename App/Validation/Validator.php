<?php

namespace App\Validation;

class Validator{

    private $data;
    private $errors = [];

    public function __construct(array $data)
    {
        $this->data = $data;
        return $this->data; 
    }
    public function validate(array $rules): ?array
    {
        
        foreach ($rules as $name => $rulesArray) {
            if (array_key_exists($name, $this->data)) {
                foreach ($rulesArray as $rules) {
                    switch ($rules) {
                        case 'required':
                            $this->required($name, $this->data[$name]);
                            break;
                        case substr($rules, 0, 3) === 'min';
                            $this->min($name, $this->data[$name],$rules);
                            break;
                        case '@':
                            $this->checkValideMail($name, $this->data[$name]);
                            break;
                        case 'same':
                            $this->samePassword($this->data['password'],$this->data['confirmPassword']);
                            break;
                        case 'check':
                            $this->validePWD($name,$this->data[$name]);
                            break;
                        case 'notSpecialCaractere':
                            $this->checkValideUserName($name, $this->data[$name]);
                            break;
                        case 'limitYear':
                            $this->limitYear($name, $this->data[$name]);
                            break;
                        default:
                            break;
                    }
                }
            }
        }
        return $this->getMessageError();
    }

    private function required(string $name, string $value){
        $value = trim($value);
        if (!isset($value) || is_null($value) || empty($value)) {
            $this->errors[$name][] = "{$name} est requis.";
        }
    }
    private function checkValideUserName(string $name, string $value){
        $value = trim($value);
        if(preg_match('/(?=.*[@#\-_$%^&+=§!\?])/',$value) == 0) {
            $this->errors[$name][] = "{$name} le nom d'utilisateur de doit pas contenir de caractères spéciaux";
        }
    }

    protected function min(string $name, string $value, string $rules){
        preg_match_all('/(\d+)/',$rules, $matches);
        $limit = (int)$matches[0][0];
        if (strlen($value) < $limit){
            $this->errors[$name][] = "{$name} doit comprend un minimum de {$limit} caractères.";
        }
    }

    protected function checkValideMail(string $name, string $value){
        $value = trim($value);
        if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$name][] = "{$name} n'est pas un email valide.";
        }
    }

    protected function samePassword(string $value,string $value1){
        $value = trim($value);
        $value1 = trim($value1);

        if($value != $value1) {

            $this->errors['confirmPassword'][] = "la confirmation de mot de passe ne marche pas.";
        }
    }
    protected function validePWD(string $name,string $value){
        $value = trim($value);
        if(preg_match('/^(?=.*\d)/',$value) == 0){
            $this->errors[$name][] = "{$name} le mot de passe doit contenir un ou plusieur chiffres";
        }
        if(preg_match('/(?=.*[A-Z])/',$value) == 0){
            $this->errors[$name][] = "{$name} le mot de passe doit contenir au moins un majuscule";
        }
        if(preg_match('/(?=.*[@#\-_$%^&+=§!\?])/',$value) == 0){
            $this->errors[$name][] = "{$name} le mot de passe doit contenir un ou plusieur caractères spéciaux ";
        }
        $ext = array('123456a@','@Picture1','password@123','12345678Azerty@','111111Azerty@','Qwerty123@','Abcde123@','Million2@','iloveyou123@','Aaron431@','Qqww1122@');
        if (in_array($value,$ext)){
            $this->errors[$name][] = "{$name} le mot de passe est trop commun ";
        }

    }

    protected function limitYear(string $name, string $value){
        $value = trim($value);
        if($value > 2021){
            $this->errors[$name][] = "{$name} la date est superieur à l'année en cours";
        }
    }

    

    private function getMessageError(): ?array
    {
        return $this->errors;
    }
}