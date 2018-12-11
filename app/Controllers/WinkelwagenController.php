<?php

class WinkelwagenController extends ControllerBase
{

    //voer de functionaliteit van ControllerBase uit
    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function addTicket($ticketId){

        $data = $this->model->addTicket($ticketId);

        if ( !array_key_exists($ticketId, $_SESSION['Winkelwagen']) ){
            $_SESSION['Winkelwagen'][$ticketId] = $data;
        }

        //echo $_SESSION['Winkelwagen'][1]['artist'];
    }

    public function viewWinkelwagen(){

    }

}