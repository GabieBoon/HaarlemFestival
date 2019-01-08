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
        $this->view->restaurantInfo = $this->FoodModel->getRestaurantInfo();

        $this->view->renderView('FoodView');
    }

    public function viewRestaurantInfo(){

    }
}