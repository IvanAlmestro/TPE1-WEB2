<?php

require_once './app/models/student.model.php';
require_once './app/views/student.view.php';

class studentsController{

    private $model;
    private $view;
 
    public function __construct() {
        $this->model = new StudentModel();
        $this->view = new StudentView();
    }

    public function showStudents() {
        $students = $this->model->getAllStudents();
        $this->view->showStudents($students);
    }
    function addStudent(){

        $nombre = $_POST['name'];
        $edad = $_POST['age'];
        $dni = $_POST['dni'];
        $carrera = $_POST['career'];
        
        $id = $this->model->addStudents($nombre, $edad, $dni, $carrera);

        header("Location: " . BASE_URL); 
    }

    function borrarProductos($id) 
    {
        $this->modelo->borrarProductos($id);
        header("Location: " . BASE_URL);
        
    }
    
}