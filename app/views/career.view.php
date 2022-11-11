<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CareerView {
    private $smarty;
    private $title;

    function __construct(){
        $this->title = "Lista de carreras";
        $this->smarty  = new Smarty();
    }
    function addStudentSelect(){

    }
    function showCareers($careers) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($careers)); 
        $this->smarty->assign('careers', $careers);
        // mostrar el tpl
        $this->smarty->display('showCareers.tpl');
    }
    function editStudents($careers){
        $this->smarty->assign('careers', $careers);
        $this->smarty->display('templates/editStudents2.tpl');
    }
    function editCareers($careers){
        $this->smarty->assign('careers', $careers);
        $this->smarty->display('templates/editCareer.tpl');
    }
    function showSelectStudent($careers){
        $this->smarty->assign('careers', $careers);
        $this->smarty->display('templates/form_alta_alumnos.tpl');
    }
}
