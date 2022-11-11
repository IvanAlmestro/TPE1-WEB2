<?php

class StudentModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_universidad;charset=utf8', 'root', '');
    }

    function getAllStudents(){

        $query = $this->db->prepare("SELECT * 
                                     FROM estudiantes 
                                     INNER JOIN carreras_grado 
                                     on estudiantes.carrera_id = carreras_grado.id_carrera");
        $query->execute();
        $students = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $students;
    }
    function getStudentId($id){
        $query = $this->db->prepare("SELECT * 
                                     FROM `estudiantes`
                                     INNER JOIN `carreras_grado`
                                     on estudiantes.carrera_id = carreras_grado.id_carrera 
                                     WHERE id = ?");
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }    
    
    public function addStudents($nombre, $edad, $dni, $carrera){
        
        $query = $this->db->prepare("INSERT INTO `estudiantes` (nombre, edad, dni, carrera_id)  VALUES(?,?,?,?)");
        $query->execute([$nombre, $edad, $dni, $carrera]);

        return $this->db->lastInsertId();
    }

    function deleteStudent($id){
        $query  = $this->db->prepare('DELETE FROM `estudiantes` WHERE id = (?)');
        $query->execute([$id]);
    }
    function StudentsByCareer($id){

        $query=$this->db->prepare("SELECT * 
                                   FROM `estudiantes`
                                   INNER JOIN carreras_grado 
                                   on estudiantes.carrera_id = carreras_grado.id 
                                   WHERE id = ?");
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function editStudents($nombre, $edad, $dni, $carrera_id, $id){
        $query = $this->db->prepare("UPDATE `estudiantes` 
                                     SET nombre = ?, edad = ?, dni= ?, carrera_id= ? 
                                     WHERE id = ?");
        $query->execute([$nombre, $edad, $dni, $carrera_id, $id]);
    }

}
