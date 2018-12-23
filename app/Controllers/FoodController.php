<?php

class FoodController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action, true);
        $this->view->setLayout('Default');
    }

    public function indexAction(){
        $this->view->render_curtis('FoodView');
    }

    public function showPage(){
        $this->view->showPage();
    }
}