<?php

namespace App\Models;
use PDO;
use Database\DbConnection;

abstract class ModelSql{

    protected $db;
    protected $table;

    public function __construct(DbConnection $db){
        $this->db = $db;
    }

    public function all():array {
        return $this->query("SELECT * FROM {$this->table}");
       
    }

    public function findById(int $id):ModelSql{
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?",$id,true);
    }

    public function query(string $sql, int $param=null, bool $single=null){
        $method = is_null($param) ? 'query' : 'prepare';
        $fetch = is_null($single) ? 'fetchAll' : 'fetch';
        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this),[$this->db]);
        if($method === 'query'){
            return $stmt->$fetch();
        }else{
            $stmt->execute([$param]);
            return $stmt->$fetch();
        }
    }



}