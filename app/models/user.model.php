<?php

class userModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_universidad; charset=utf8', 'root', '');
    }

    public function getUserEmail($email) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function addUsuario($email, $password) {
        $query = $this->db->prepare('INSERT INTO `usuarios` (email, password) VALUES (?, ?)');
        $query->execute([$email,$password]);
    }
}