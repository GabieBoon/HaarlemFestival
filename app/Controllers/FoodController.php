<?php

class FoodController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action, true);
    }

    public function indexAction(){

        $this->showPage();
    }

    public function showPage(){
        $this->view->showPage();
    }
}