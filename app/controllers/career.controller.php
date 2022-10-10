<?php

require_once './app/models/career.model.php';
require_once './app/views/career.view.php';

class careersController{

    private $model;
    private $view;
 
    public function __construct() {
        $this->model = new CareerModel();
        $this->view = new CareerView();
    }

    public function showCareers() {
        $careers = $this->model->getAllCareers();
        $this->view->showCareers($careers);
    }

}