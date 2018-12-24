<?php

class TicketController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action, true);
        
    }

    public function indexAction(){

        //$this->view->renderView('TicketView');
        $this->showPage();
    }

    public function showPage(){
        $this->view->showPage();
    }

    public function confirmAction()
    {
        $this->view->renderView('OrderConfirmView');
    }

    public function dataAction()
    {

        $this->view->renderView('OrderDataView');
    }

    public function successAction()
    {
        $this->view->renderView('OrderSuccessView');
    }

//    public function clearCartAction(){
//        $_SESSION['Cart'] = array();
//
//        $this->showPage();
//    }

}