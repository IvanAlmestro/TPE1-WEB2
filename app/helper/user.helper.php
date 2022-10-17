<?php

class userHelper {
        
       public function checkLoggedIn() {
            //if para que si la sesion esta empezada no la vuelva a empezar porque tiraba error.
           if(!isset($_SESSION['IS_LOGGED'])){
           session_start();
           }
           if (!isset($_SESSION['IS_LOGGED'])) {
               header("Location: " . BASE_URL . 'login');
               die();
           }
       }
       public function checkInicio() {
        if(!isset($_SESSION)) { 
            session_start(); 
        } 
    }
}