<?php

class CartController extends ControllerBase
{

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
    }

    public function addTicketAction($ticketId){

        $data = $this->model->addTicket($ticketId);

        

        //voeg ticket toe tenzij hij al in het Cart zit
        if ( !array_key_exists($ticketId, $_SESSION['Cart']) ){
            $_SESSION['Cart'][$ticketId] = $data[0];
        }

        //please use Router::redirect(); - Jasper
        header('Location: http://localhost' .  PROOT . $_SESSION['LastVisited'] . '/' );
        //Router::redirect($_SESSION['LastVisited']);

    }

    public function viewCart(){

    }

}