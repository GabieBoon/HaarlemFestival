<?php

class TicketController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action, true);
        
    }

    public function indexAction(){

        //$this->view->render_curtis('TicketView');
        $this->showPage();
    }

    public function showPage(){
        $this->view->showPage();
    }

    public function confirmAction()
    {
        $this->view->render_curtis('OrderConfirmView');
    }

    public function dataAction()
    {

        $this->view->render_curtis('OrderDataView');
    }

    public function successAction()
    {
        $this->view->render_curtis('OrderSuccessView');
    }

//    public function clearCartAction(){
//        $_SESSION['Cart'] = array();
//
//        $this->showPage();
//    }

}