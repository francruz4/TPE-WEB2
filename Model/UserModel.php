<?php

class UserModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_car;charset=utf8', 'root', '');
    }

    function getUser($email){
        $query = $this->db->prepare('SELECT * FROM user WHERE mail = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }


}