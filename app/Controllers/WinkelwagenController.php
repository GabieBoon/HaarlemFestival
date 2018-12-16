<?php

class WinkelwagenController extends ControllerBase
{

    //voer de functionaliteit van ControllerBase uit
    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function addTicketAction($ticketId){

        $data = $this->model->addTicket($ticketId);


        //voeg ticket toe tenzij hij al in het winkelwagentje zit
        if ( !array_key_exists($ticketId, $_SESSION['Winkelwagen']) ){
            $_SESSION['Winkelwagen'][$ticketId] = $data[0];
        }

        //please use Router::redirect(); - Jasper
        header('Location: http://localhost' .  PROOT . $_SESSION['LastVisited'] . '/' );

    }

    public function viewWinkelwagen(){

    }

}