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

        $this->view->showPage($danceArtists, $danceLocations, $jazzLocations, $restaurants);
    }

}