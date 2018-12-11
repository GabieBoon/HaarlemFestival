<?php

 class ControllerBase extends ApplicationBase{

    protected $model, $view;

    //zorg voor verbinding tussen de controller en de model en view klassen
     //wordt aangeroepen vanuit Controller klassen
    public function __construct($class)
    {
        $model = $class . 'Model';
        $view = $class . 'View';

        require_once ROOT . DS . 'app' . DS . 'Models' . DS . $model . '.php';
        require_once ROOT . DS . 'app' . DS . 'Views' . DS . $view . '.php';


        $this->model = new $model();
        $this->view = new $view($class);

        //roep de application base aan
        parent::__construct($class);

    }

     public function addTicketAction($ticketId){

        require_once ROOT . DS . 'app' . DS . 'Controllers' . DS . 'WinkelwagenController' . '.php';

        $winkelwagen = new WinkelwagenController('Winkelwagen');
        $winkelwagen->addTicket($ticketId);

        $this->showPage();
     }

     public function showWinkelwagen(){

     }
}