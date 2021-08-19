<?php

namespace App\Validation;

class Validator{

    private $data;
    private $errors;

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
                        default:
                            # code...
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

    protected function min(string $name, string $value, string $rules){
        preg_match_all('/(\d+)/',$rules, $matches);
        $limit = (int)$matches[0][0];
        if (strlen($value) < $limit){
            $this->errors[$name][] = "{$name} doit comprend un minimum de {$limit} caractères.";
        }
    }
    private function getMessageError(): ?array
    {
        return $this->errors;
    }
}