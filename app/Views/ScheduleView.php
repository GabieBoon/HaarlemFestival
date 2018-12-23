<?php

class ScheduleView extends ViewBase{

    protected $danceArtists, $danceLocations, $jazzLocations, $restaurants, $languages, $danceTickets, $jazzTickets, $foodTickets, $historicTickets;

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function showPage($artists, $danceLocations, $jazzLocations, $restaurants, $languages, $danceTickets, $foodTickets, $historicTickets, $jazzTickets){

        $this->danceArtists = $artists;

        $this->danceLocations = $danceLocations;
        $this->jazzLocations = $jazzLocations;
        $this->restaurants = $restaurants;
        $this->languages = $languages;

        $this->danceTickets = $danceTickets;
        $this->jazzTickets = $jazzTickets;
        $this->historicTickets = $historicTickets;
        $this->foodTickets = $foodTickets;

        $this->render();
    }




}