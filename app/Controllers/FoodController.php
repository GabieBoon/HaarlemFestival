<?php

class FoodController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action, true);
        $this->view->setLayout('Default');
        $this->view->setBgImage('foodbackground.jpg');
    }

    public function indexAction(){
        $this->view->renderView('FoodView');
    }
}