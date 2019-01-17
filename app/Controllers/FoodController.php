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

        include ROOT . DS . 'app' . DS . 'Views' . DS . 'Food' . DS . 'ViewFunctions' . DS . 'FoodViewFunctions.php';

        $content = new ContentModel();
        $this->view->ContentModel = $content->getContent('Food');

        $this->view->renderView('Food/FoodView');
    }

    public function restaurantAction($restaurantName) {
        $this->view->restaurant = $restaurantName;

        $content = new ContentModel();
        $this->view->ContentModel = $content->getContent('Food');


        $this->view->renderView('Food/RestaurantView');
    }
}