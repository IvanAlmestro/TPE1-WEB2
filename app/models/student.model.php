<?php

class StudentModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_universidad;charset=utf8', 'root', '');
    }

    function getAllStudents(){

        $query = $this->db->prepare("SELECT * FROM estudiantes INNER JOIN carreras_grado ON estudiantes.carrera_id = carreras_grado.id");
        $query->execute();
        $students = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $students;
    }
 
}
