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

        include ROOT . DS . 'App' . DS . 'Views' . DS . 'Food' . DS . 'ViewFunctions' . DS . 'FoodViewFunctions.php';

        $content = new ContentModel();
        $this->view->ContentModel = $content->getContent('EN','Food');

        $this->view->renderView('Food/FoodView');
    }

    public function restaurantAction($restaurantId = NULL) {
        $this->view->restaurantDetails = $this->FoodModel->getRestaurantDetails($restaurantId);
        $this->view->restaurant = $restaurantId;
        //$this->view->restaurantDescription = 'restaurantDescription' . $_SESSION['Language'];

        $content = new ContentModel();
        $this->view->ContentModel = $content->getContent($_SESSION['Language'],'Food');

        $this->view->renderView('Food/RestaurantView');
    }

    public function restaurantOrderAction($number, $day, $session){

        $tickets = $this->FoodModel->getFoodTickets();

        foreach ($tickets as $ticket){

            //splits binnenkomende data op
            //data komt binnen als 2019-7-27 20:30:00
            $startDateTime = explode(' ', $ticket->startTime);
            $startDate = explode('-', $startDateTime[0]);
            $startTime = explode(':', $startDateTime[1]);

            if ($startDate[2] === $day){
                $ticketsCorrectDay[] = $ticket;
            }
        }

        $ticketId = $ticketsCorrectDay[$session - 1]->id;

        $cartModel = new CartModel();
        $data = $cartModel->getTicketDataById($ticketId);
        $_SESSION['Cart'][$ticketId] = $data;
        $_SESSION['Cart'][$ticketId]->amount = $number;

        echo "succes: uw tickets zijn toegevoegd aan het winkelwagentje"  ;
    }

}