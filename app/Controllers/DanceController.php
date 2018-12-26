<?php

class DanceController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action, true);
    }

    public function indexAction(){

        $this->showPageV2();
    }

//    public function showPage(){
//        $danceArtists = $this->DanceModel->getDanceArtists();
//        $danceLocations = $this->DanceModel->getLocations("Dance");
//        $danceTickets = $this->DanceModel->getDanceTickets();
//        $allAccessTickets = $this->DanceModel->getAllAccessTicketsDance();
//
//        $this->view->showPage($danceArtists, $danceLocations, $danceTickets, $allAccessTickets);
//    }

    public function showPageV2(){
        $this->view->danceArtists = $this->DanceModel->getDanceArtists();
        $this->view->danceLocations = $this->DanceModel->getLocations("Dance");
        $this->view->danceTickets = $this->DanceModel->getDanceTickets();
        $this->view->allAccessTickets = $this->DanceModel->getAllAccessTicketsDance();

        include ROOT . DS . 'app' . DS . 'lib' . DS . 'TableGenerator' . DS . 'Table.php';
        $this->view->table = new Table();

        include ROOT . DS . 'app' . DS . 'Views' . DS . 'ViewFunctions' . DS . 'DanceViewFunctions.php';

        $this->view->renderView("DanceViewV2");
    }

}