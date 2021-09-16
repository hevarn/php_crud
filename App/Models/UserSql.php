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
    public function create(array $data, ?string $pictureName = null , ?array $relations = null)
    { 
        // parent::Create($data);
        $this->arrayexplode($data);
        $stmt = $this->db->getPDO()->lastInsertId();
        $stmt = $this->db->getPDO()->prepare("INSERT INTO {$this->table} (username, email, password) VALUE (?, ?, ?)");
        $stmt->execute($this->value);
        return true;
    }
}
