<?php 

namespace App\Models;

class UserSql extends ModelSql{

    protected $table = "users";

    public function getByUsername(string $username){
        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$username],true);
    }
    public function CreateUser(array $data){
        parent::Create($data);
        $stmt = $this->db->getPDO()->lastInsertId();
        $stmt = $this->db->getPDO()->prepare("INSERT INTO users (username, email, password) VALUE (?, ?, ?)");
        $stmt->execute();
    }
}