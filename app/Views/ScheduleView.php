<?php

class ScheduleView extends ViewBase{

    protected $danceArtists, $danceLocations, $jazzLocations, $restaurants, $languages;

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function showPage($artists, $danceLocations, $jazzLocations, $restaurants){

        $this->danceArtists = $artists;
        $this->danceLocations = $danceLocations;
        $this->jazzLocations = $jazzLocations;
        $this->restaurants = $restaurants;

        $this->render();
    }


}