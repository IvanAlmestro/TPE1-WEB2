<?php
    require_once './app/controllers/student.controller.php';
    require_once './app/controllers/career.controller.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // acción por defecto
    $action = 'about'; 
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }

    $params = explode('/', $action);

    // instancio la clase del controlador
    

    

    switch ($params[0]) {
        case 'about':
            $studentController = new studentsController();
            $studentController->showStudents();
            break;
        case 'careers':
            $careerController = new careersController();
            $careerController->showCareers();
            break;
        case 'add':
            

        default:
            echo('404 Page not found');
            break;
    }
