<?php

class TicketsView extends ViewBase{

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

    public function getCart(){
        foreach ($_SESSION['Cart'] as $ticketId => $ticket){
            var_dump($ticket);
        }
    }
}