<?php

class FoodController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
        $this->view->setLayout('Event');
        $this->view->setBgImage('foodbackground.jpg');
    }

    public function indexAction(){
        $this->view->restaurantInfo = $this->FoodModel->getRestaurantInfo();

        $this->view->renderView('Food/FoodView');
    }

    public function viewRestaurantInfo(){

    }
}