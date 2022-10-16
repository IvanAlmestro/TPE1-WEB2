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

        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $user = $this->model->getUserEmail($email);

        if ($user && password_verify($password, $user->password)) {
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            
            $this->view->showLogin("Has logeado correctamente");
        } else {
           $this->view->showLogin("El usuario o la contraseña no existe.");
        } 
    }
    function addEmail(){
        $email = $_REQUEST['email'];
        $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

        $this->model->addUsuario($email, $password);

        header("Location: " . BASE_URL);
    }
    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
