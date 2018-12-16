<?php

class DanceView extends ViewBase{

    public $artists, $locations;

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function helloWorld(){
        echo "Hello World";
    }

    public function showPage($artists, $locations){

        $this->artists = $artists;
        $this->locations = $locations;

        $this->render();
    }

    public function showLocations(){
        foreach ($this->locations as $location){
            $title = $location->name;
            include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'DanceBlok' .'.php';
            //echo $location->name . "<br>";
        }
    }

    public function showArtists(){
        foreach ($this->artists as $artist){
            $title = $artist->firstName . " " . $artist->preposition . " " . $artist->lastName;
            include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'DanceBlok' .'.php';
        }
    }

}