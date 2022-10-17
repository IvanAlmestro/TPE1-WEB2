<?php
    require_once './app/controllers/student.controller.php';
    require_once './app/controllers/career.controller.php';
    require_once './app/controllers/user.controller.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // acción por defecto
    $action = 'aboutStudent'; 
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }

    $params = explode('/', $action);

    // instancio la clase del controlador
    

    

    switch ($params[0]) {
        case 'login':
            $userController = new userController();
            $userController->showFormLogin();
            break;
        case 'validate':
            $userController = new userController();
            $userController->validateUser(); 
            break;
        case 'logout':
            $userController = new userController();
            $userController->logout();
            break;
        case 'aboutStudent':
            $studentController = new studentsController();
            $studentController->showStudents();
            break;
        
        case 'showStudent':
            $studentController = new studentsController();
            $studentController->showStudentId($params[1]);

            break;
        case 'addStudent':
            $studentController = new studentsController();
            $studentController->addStudent();
            break;
        case 'deleteStudent':
            $studentController = new studentsController();
            $id = $params[1];
            $studentController->deleteStudent($id);
            break;
        case 'editStudents':
            $studentController = new studentsController();
            $careerController = new careersController();
            $studentController->showEditStudent($params[1]);
            $careerController->showEditCareer();
            break;
        case 'editStudent':
            $studentController = new studentsController();
            $studentController->editStudent($params[1]);
            break;
        case 'careers':
            $careerController = new careersController();
            $careerController->showCareers();
            break;
        case 'addCareer':
            $careerController = new careersController();
            $careerController->addCareer();
            break;
        case 'deleteCareer':
            $careerController = new careersController();
            $id = $params[1];
            $careerController->deleteCareer($id);
            break;
        case 'editCareer':
            $careerController = new careersController();
            $careerController->showEditCareers($params[1]);
            break;
        case 'editCareers':
            $careerController = new careersController();
            $careerController->editCareers($params[1]);
            break;
       
        default:
            echo('404 Page not found');
            break;
    }
