<?php
namespace Config;

use PDO;

class PDOp {
    protected $PDO;
    public $numExecutes;
    public $numStatements;
    public function __construct($dsn, $user=NULL, $pass=NULL, $driver_options=NULL) {
        $this->PDO = new PDO($dsn, $user, $pass, $driver_options);
        $this->numExecutes = 0;
        $this->numStatements = 0;
    }

    public function  getErrors(){
        return $this->PDO->errorInfo();
    }
}
