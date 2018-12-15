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
            echo $location->name;
        }
    }
}