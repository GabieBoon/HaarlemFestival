<?php

class TicketsController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
    }

    public function indexAction(){

        $this->showPage();
    }

    public function showPage(){
        $this->view->showPage();
    }

//    public function clearWinkelwagenAction(){
//        $_SESSION['Winkelwagen'] = array();
//
//        $this->showPage();
//    }

}