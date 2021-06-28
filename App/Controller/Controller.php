<?php
namespace App\Controller;

use Database\DbConnection;

class Controller{
    protected $db;
    public function __construct(DbConnection $db) {
        $this->db= $db;
    }
    public function view(string $path, array $params = null){
        ob_start();
        require VIEWS .$path.'.php';
        if($params){
            $params = extract($params);
        }
        $content = ob_get_clean();
        require VIEWS.'layout.php';

        }

}