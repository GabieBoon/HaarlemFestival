<?php

class HomeController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function indexAction(){

        //$this->view->helloWorld();

        //$data = $this->model->dbTest();
        //$this->view->dataUitTestDB($data);
        $this->view->showPage();
    }

}