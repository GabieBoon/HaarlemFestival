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

        if ( !array_key_exists($ticketId, $_SESSION['Winkelwagen']) ){
            $_SESSION['Winkelwagen'][$ticketId] = $data;
        }

        //debug($_SESSION);


        header('Location: http://localhost' .  PROOT . 'Haarlem-Festival%20BitBucket/haarlem-festival/' . $_SESSION['LastVisited'] . '/' );

    }

    public function viewWinkelwagen(){

    }

}