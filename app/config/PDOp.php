<?php

namespace Config;

use PDO;
use PDOException;

class PDOp {
    /*
    SIGLENTON PARA MANEJAR LAS BD
    */
    private static $instance = null;

    private $pdo;

    public $numExecutes;
    public $numStatements;

    private function __construct(
        $host = "localhost",
        $db = "nombre_base",
        $user = "root",
        $pass = "",
        $charset = "utf8mb4"
    ) {

        try {

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $this->pdo = new PDO($dsn, $user, $pass, $options);

            $this->numExecutes = 0;
            $this->numStatements = 0;

        } catch (PDOException $e) {

            die("Error de conexión: " . $e->getMessage());

        }
    }

    public static function getInstance()
    {

        if (self::$instance === null) {

            self::$instance = new self(
                "127.0.0.1",
                "abogado",
                "root",
                "root"
            );

        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->pdo;
    }

    public function getErrors()
    {
        return $this->pdo->errorInfo();
    }
}