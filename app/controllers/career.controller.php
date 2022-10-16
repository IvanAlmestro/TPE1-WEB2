<?php

require_once './app/models/career.model.php';
require_once './app/views/career.view.php';
require_once './app/helper/user.helper.php';

class careersController{

    private $model;
    private $view;
    private $helper;
 
    public function __construct() {
        $this->model = new CareerModel();
        $this->view = new CareerView();
        $this->helper = new userHelper();
    }

    public function showCareers() {
        $careers = $this->model->getAllCareers();
        $this->view->showCareers($careers);
    }
    function addCareer(){

        $carrera = $_POST['career'];
        $duracion = $_POST['duration'];
        $sede = $_POST['sede'];
        
        $id = $this->model->addCareer($carrera, $duracion, $sede);

        header("Location: " . BASE_URL . "careers"); 
    }

    function deleteCareer($id){
        $this->model->deleteCareer($id);
        header("Location: " . BASE_URL . "careers"); 
    }
    function showEditCareer(){
        $this->helper->checkInicio();
        $careers = $this->model->getAllCareers();
        $this->view->editStudents($careers);
    }


}