<?php
    require_once './app/controllers/student.controller.php';
    require_once './app/controllers/career.controller.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // acción por defecto
    $action = 'aboutStudent'; 
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }

    $params = explode('/', $action);

    // instancio la clase del controlador
    

    

    switch ($params[0]) {
        case'University':
            
            break;
        case 'aboutStudent':
            $studentController = new studentsController();
            $studentController->showStudents();
            break;
        case 'careers':
            $careerController = new careersController();
            $careerController->showCareers();
            break;
        case 'addStudent':
            $studentController = new studentsController();
            $studentController->addStudent();
            break;
        case 'addCareer':
            $careerController = new careersController();
            $careerController->addCareer();
            break;
        case 'deleteStudent':
            $studentController = new studentsController();
            $id = $params[1];
            $studentController->deleteStudent($id);
            break;
        case 'deleteCareer':
            $careerController = new careersController();
            $id = $params[1];
            $careerController->deleteCareer($id);
            break;
    

        default:
            echo('404 Page not found');
            break;
    }
