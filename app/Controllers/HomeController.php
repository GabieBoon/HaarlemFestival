<?php

class HomeController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action, true);
    }

    public function indexAction(){

        //$this->view->helloWorld();

        //$data = $this->model->dbTest();
        //$this->view->dataUitTestDB($data);
        $this->view->showPage();
    }

}