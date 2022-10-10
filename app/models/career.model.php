<?php

class CareerModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_universidad;charset=utf8', 'root', '');
    }

    function getAllCareers(){

        $query = $this->db->prepare("SELECT * FROM carreras_grado");
        $query->execute();
        $careers = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $careers;
    }
 
}