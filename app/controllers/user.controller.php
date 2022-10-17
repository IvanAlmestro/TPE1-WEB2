<?php
require_once 'app/views/user.view.php';
require_once 'app/models/user.model.php';

class userController{
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new userModel();
        $this->view = new userView();
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function validateUser() {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUserEmail($email);

        if ($user && password_verify($password, $user->password)) {
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);

        } else {
           $this->view->showLogin("El usuario o la contraseña no existe o no es correcta.");
        } 
    }
   
    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
