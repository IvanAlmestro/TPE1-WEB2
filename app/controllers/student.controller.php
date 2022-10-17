<?php

require_once './app/models/student.model.php';
require_once './app/views/student.view.php';
require_once './app/helper/user.helper.php';

class studentsController{

    private $model;
    private $view;
    private $helper;

    function __construct() {
        $this->model = new StudentModel();
        $this->view = new StudentView();
        $this->helper = new userHelper();
    }

    function showStudents() {
        $this->helper->checkInicio();
        $students = $this->model->getAllStudents();
        $this->view->showStudents($students);
    }

    function showStudentId($id){
        $this->helper->checkInicio();
        $students = $this->model->getStudentId($id);
        $this->view->show1Student($students);
    }
    function addStudent(){
        $this->helper->checkLoggedIn();
        $nombre = $_POST['name'];
        $edad = $_POST['age'];
        $dni = $_POST['dni'];
        $carrera = $_POST['career'];
        $id = $this->model->addStudents($nombre, $edad, $dni, $carrera);
        header("Location: " . BASE_URL); 
    }

    function deleteStudent($id){
        $this->helper->checkLoggedIn();
        $this->model->deleteStudent($id);
        header("Location: " . BASE_URL); 
    }

    function showEditStudent($id){
        $this->helper->checkLoggedIn();
        $students = $this->model->getStudentId($id);
        $this->view->edit($students);
    }

    function editStudent($id){
        
        $nombre = $_POST['nameEdit'];
        $edad = $_POST['ageEdit'];
        $dni = $_POST['dniEdit'];
        $carrera_id = $_POST['carreraEdit'];

        $this->model->editStudents($nombre, $edad, $dni ,$carrera_id, $id);
        header("Location: " . BASE_URL);
    }
    function showEditStudentForm($id){
        $this->helper->checkLoggedIn();
        $students = $this->model->getStudentId($id);
        $this->view->edit($students);
    }
}