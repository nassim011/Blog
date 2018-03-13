<?php

namespace App;
use PDO;

class DataBase
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user ='root', $db_pass = '' ,$db_host = 'localhost')
    {
        $this->db_name =$db_name;
        $this->db_user =$db_user;
        $this->db_pass =$db_pass;
        $this->db_host =$db_host;
    }
    private function getPDO(){
        if ($this->pdo === null){
            $pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host,"$this->db_user","$this->db_pass");
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo =$pdo;
        }
        return $this->pdo;
    }

    public function query($statement,$class_name){
        $req = $this->getPDO()->query($statement);
        $data = $req->fetchAll(PDO::FETCH_CLASS,$class_name);
        return $data;
    }
    public function prepare($statement,$tabAtr,$class_name,$one = false){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($tabAtr);
        $req->setFetchMode(PDO::FETCH_CLASS,$class_name);
        if ($one){
            $result = $req->fetch();
        }else{
            $result = $req->fetchAll();
        }
        return $result;
    }

}