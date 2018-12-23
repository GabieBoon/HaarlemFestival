<?php

class ScheduleController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
    }

    public function indexAction(){

        $this->showPage();
    }

    public function showPage(){
        $danceArtists = $this->model->getDanceArtists();
        $danceLocations = $this->model->getLocations("Dance");
        $jazzLocations = $this->model->getLocations("Jazz");
        $restaurants = $this->model->getLocations("Food");
        $languages = $this->model->getLanguages();


        $danceTickets = $this->model->getDanceTickets();
        $foodTickets = $this->model->getFoodTickets();
        $historicTickets = $this->model->getHistoricTickets();
        $jazzTickets = $this->model->getJazzTickets();
        //($languages);

        $this->view->showPage($danceArtists, $danceLocations, $jazzLocations, $restaurants, $languages, $danceTickets, $foodTickets, $historicTickets, $jazzTickets);
    }

}