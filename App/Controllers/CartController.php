<?php

class CartController extends ControllerBase
{

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
        
        //these are editable
         $this->view->setSiteTitle('Cart - Haarlem Festival');
         $this->view->setBgImage('orderbg.jpg');
    }

    public function indexAction()
    {
        $this->view->renderView('Cart/CartView');
    }

    public function addTicketAction($ticketId){

        $data = $this->CartModel->getTicketDataById($ticketId);
//        $this->CartModel->getDataFromObj($data);

        //voeg ticket toe tenzij hij al in het Cart zit
        if (!array_key_exists($ticketId, $_SESSION['Cart'])) {
            $_SESSION['Cart'][$ticketId] = $data;
            $_SESSION['Cart'][$ticketId]->amount = 1;
        } else {
            $_SESSION['Cart'][$ticketId]->amount += 1;
        }

        //please use Router::redirect(); - Jasper
        //header('Location: http://localhost' .  PROOT . $_SESSION['LastVisited'] . '/' );
        Router::redirect($_SESSION['LastVisited']);

    }

}