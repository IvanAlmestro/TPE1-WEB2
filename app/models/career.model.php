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
    public function addCareer ($carrera, $duracion, $sede){
        
        $query = $this->db->prepare("INSERT INTO carreras_grado (carrera, duracion, sede)  VALUES(?,?,?)");
        $query->execute([$carrera, $duracion, $sede]);

        return $this->db->lastInsertId();
    }
    function deleteCareer($id){
        $query  = $this->db->prepare('DELETE FROM `carreras_grado` WHERE id = (?)');
        $query->execute([$id]);
    }
 
}