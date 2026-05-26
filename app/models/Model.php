<?php
namespace Models;
use Config\PDOp;

abstract class Model{

    public static function getAll(){
         $db = PDOp::getInstance()->getConnection();

        $query = $db->query("SELECT * FROM abogado LIMIT 10");
        return $query->fetchAll();
    }
};