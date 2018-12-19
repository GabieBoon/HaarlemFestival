<?php

class ScheduleView extends ViewBase{

    protected $danceArtists, $danceLocations, $jazzLocations, $restaurants, $languages, $dancetTickets;

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function showPage($artists, $danceLocations, $jazzLocations, $restaurants, $languages, $danceTickets){

        $this->danceArtists = $artists;
        $this->danceLocations = $danceLocations;
        $this->jazzLocations = $jazzLocations;
        $this->restaurants = $restaurants;
        $this->languages = $languages;
        $this->dancetTickets =$danceTickets;

        $this->render();
    }




}