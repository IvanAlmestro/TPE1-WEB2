<?php

class userHelper {

    public function checkLoggedIn() {
        session_start();
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