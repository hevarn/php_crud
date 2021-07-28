<?php

namespace App\Models;

class UserSql extends ModelSql
{

    protected $table = "users";
    private $name;
    private $email;
    private $password;
    private $confirmPassword;
    
    public function setName($name){
        $name = $_POST['username'];
        $this->name= $name;
        return $this;
    }
    public function getName(){
        return $this->name;
    }
    public function setEmail($email){
        $email = $_POST['email'];
        $this->email= $email;
        return $this;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $password = $_POST['password'];
        $this->password= $password;
        return $this;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setConfirmPassword($confirmPassword){
        $confirmPassword = $_POST['confirmPassword'];
        $this->confirmPassword= $confirmPassword;
        return $this;
    }
    public function getConfirmPassword(){
        return $this->confirmPassword;
    }



    public function getByUsername(string $username)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$username], true);
    }

    // public function UserDataValidation(){
    //     if(empty($name)) || empty($email)
    //     }
    //}
    public function CreateUser(array $data)
    {
        parent::Create($data);
        $stmt = $this->db->getPDO()->lastInsertId();
        $stmt = $this->db->getPDO()->prepare("INSERT INTO users (username, email, password) VALUE (?, ?, ?)");
        $stmt->execute();
    }
}
