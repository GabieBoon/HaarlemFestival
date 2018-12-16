<?php

class ScheduleController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function defaultAction(){

        $this->showPage();
    }

    public function showPage(){
        $artists = $this->model->getArtists();
        $locations = $this->model->getLocations();

        $this->view->showPage($artists, $locations);
    }

}