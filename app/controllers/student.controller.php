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

    /*function musicByGenre() {
        // verifica datos obligatorios
        if (!isset($_GET['genre']) || empty($_GET['genre'])) {
            $this->view->renderError();
            return;
        }
        // obtiene el genero enviado por GET
        $genre = $_GET['genre'];
        // obtengo las peliculas del modelo
        $movies = $this->model->getMoviesByGenre($genre);
        // actualizo la vista
        $this->view->renderMoviesByGenre($genre, $movies);
    
    */
}
 