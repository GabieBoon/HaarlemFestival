<?php

class HomeController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
        $this->view->setBgImage('home/homeBG-1.jpg');
    }

    public function indexAction(){

        //$this->view->helloWorld();

        //$data = $this->model->dbTest();
        //$this->view->dataUitTestDB($data);
        //$this->view->showPage();
        $this->view->renderView('Home/HomeView');
    }

    public function changeLanguageAction($language){

        $_SESSION['Language'] = $language;
        Router::redirect($_SESSION['LastVisited']);
    }
}