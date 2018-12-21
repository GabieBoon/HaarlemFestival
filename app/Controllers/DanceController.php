<?php

class DanceController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
    }

    public function indexAction(){

        $this->showPage();
    }

    public function showPage(){
        $danceArtists = $this->model->getDanceArtists();
        $danceLocations = $this->model->getLocations("Dance");
        $danceTickets = $this->model->getDanceTickets();

        $this->view->showPage($danceArtists, $danceLocations, $danceTickets);
    }

}