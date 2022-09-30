<?php

require_once 'MusicModel.php';
require_once 'MusicView.php';

class MusicController{
    private $model;
    private $view;
 
    public function __construct() {
        $this->model = new MusicModel();
        $this->view = new MusicView();
    }
    function musicByGenre() {
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
    }
 

 