<?php

class TicketsView extends ViewBase{

    protected $winkelwagen;

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function helloWorld(){
        echo "Hello World";
    }

    public function showPage(){

        //var_dump($_SESSION) ;

        $this->render();
    }

    public function getWinkelwagen(){
        foreach ($_SESSION['Winkelwagen'] as $ticketId => $ticket){
            var_dump($ticket);
        }
    }
}