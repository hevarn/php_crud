<?php

namespace App\Models;

class UserSql extends ModelSql
{

    protected $table = "user";
    // private $name;
    // private $email;
    // private $password;
    // private $confirmPassword;
    


    public function getByUsername(string $username)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$username], true);
    }

    public function arrayexplode($data){
        $encrypted = password_hash($data['password'],PASSWORD_DEFAULT);
        $value = [$data['username'],$data['email'],$encrypted];
        $this->value = $value;
        return $this->value;
    }
    public function arrayexplodeToGoogleUser($data){
        $value = [$data['sub'],$data['picture'],$data['email']];
        $this->value = $value;
        return $this->value;
    }
    public function create(array $data, ?string $pictureName = null , ?array $relations = null)
    { 
        // parent::Create($data);
        $this->arrayexplode($data);
        var_dump($this->value);die();
        $stmt = $this->db->getPDO()->lastInsertId();
        $stmt = $this->db->getPDO()->prepare("INSERT INTO {$this->table} (username, email, password) VALUE (?, ?, ?)");
        $stmt->execute($this->value);
        return true;
    }
    public function createUserIdentifyByGoogle(array $data, ?string $pictureName = null , ?array $relations = null)
    { 
        $this->arrayexplodeToGoogleUser($data);
        $stmt = $this->db->getPDO()->lastInsertId();
        $stmt = $this->db->getPDO()->prepare("INSERT INTO userbygoogle (sub, picture, email) VALUE (?, ?, ?)");
        $stmt->execute($this->value);
        return true;
    }
    public function getUserByGoogle(string $useEmail)
    {
        return $this->query("SELECT * FROM userbygoogle WHERE email = ?", [$useEmail], true);
    }
}
