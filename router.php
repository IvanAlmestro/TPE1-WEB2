<?php
    require_once './app/controllers/student.controller.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // acción por defecto
    $action = 'about'; 
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }

    $params = explode('/', $action);

    // instancio la clase del controlador
    $studentController = new studentsController();

    

    switch ($params[0]) {
        case 'about':
            $studentController->showStudents();
            break;
        
        default:
            echo('404 Page not found');
            break;
    }
