<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class StudentView {

    private $smarty;
    private $title;

    function __construct(){
        $this->title = "Lista de studiantes";
        $this->smarty  = new Smarty();
    }

    function showStudents($students) {
        // asigno variables al tpl smarty
        $this->smarty->assign('lenght', count($students)); 
        $this->smarty->assign('students', $students);

        // mostrar el tpl
        $this->smarty->display('showStudents.tpl');
    }

}
