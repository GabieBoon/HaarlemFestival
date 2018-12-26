<?php

class DanceView extends ViewBase{

    protected $danceArtists, $danceLocations, $danceTickets, $allAccessTickets;

    public function __construct($className)
    {
        parent::__construct($className);
    }
    public function helloWorld(){
        echo "Hello World";
    }

    public function showPage($artists, $locations, $tickets, $allAccessTickets){

        $this->danceArtists = $artists;
        $this->danceLocations = $locations;
        $this->danceTickets = $tickets;
        $this->allAccessTickets = $allAccessTickets;

        $this->render();
    }

    public function showLocations(){
        foreach ($this->danceLocations as $location){
            $title = $location->name;
            include ROOT . 'app' . DS . 'Layouts' . DS . 'DanceBlok' .'.php';
            //echo $location->name . "<br>";
        }
    }

    public function showArtists(){
        foreach ($this->danceArtists as $artist){
            $title = $artist->firstName . $artist->preposition .  $artist->lastName;

            //debug($title);

            include ROOT . 'app' . DS . 'Layouts' . DS . 'DanceBlok' .'.php';
        }
    }

    public function showAllAccessTickets(){

    }

}