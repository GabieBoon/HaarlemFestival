<?php

class CmsView extends ViewBase
{
    //public $danceArtists, $danceLocations;

    public function __construct($className)
    {
        parent::__construct($className);
    }
    public function helloWorld()
    {
        echo "Hello World";
    }

    public function showPage($artists, $locations)
    {

        // $this->danceArtists = $artists;
        // $this->danceLocations = $locations;

        $this->render();
    }

    public function showLocations()
    {
        foreach ($this->danceLocations as $location) {
            $title = $location->name;
            include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'DanceBlok' . '.php';
            //echo $location->name . "<br>";
        }
    }

    public function showArtists()
    {
        foreach ($this->danceArtists as $artist) {
            $title = $artist->firstName . " " . $artist->preposition . " " . $artist->lastName;
            include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'DanceBlok' . '.php';
        }
    }

}