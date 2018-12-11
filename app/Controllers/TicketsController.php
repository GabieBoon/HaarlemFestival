<?php

class TicketsController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function defaultAction(){

        $this->showPage();
    }

    public function showPage(){
        $this->view->showPage();
    }

    public function clearWinkelwagenAction(){
        $_SESSION['Winkelwagen'] = array();

        $this->showPage();
    }

}