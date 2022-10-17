<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class StudentView {

    private $smarty;

    function __construct(){
        $this->smarty  = new Smarty();
    }

    function showStudents($students) {
        // asigno variables al tpl smarty
        $this->smarty->assign('lenght', count($students)); 
        $this->smarty->assign('students', $students);

        // mostrar el tpl
        $this->smarty->display('showStudents.tpl');
    }
    function edit($students){
        $this->smarty->assign('students', $students);
        $this->smarty->display('templates/editStudents.tpl');
    }
    function show1Student($students){
        $smarty= new Smarty;
        $smarty->assign('students', $students);
        $smarty->display('templates/showDetails.tpl'); 
    }
}
