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
            include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'DanceBlok' .'.php';
            //echo $location->name . "<br>";
        }
    }

    public function showArtists(){
        foreach ($this->artists as $artist){
            echo $artist->firstName . ' ' . $artist->preposition .  ' '  . $artist->lastName;
        }
    }

    public function getPicture($pictureName){

        $plek = ROOT . DS . 'images' . DS . $pictureName;

        $pad = "/haarlem-festival/images/$pictureName";

        if (file_exists($plek . '.jpg')){
            return $pad . '.jpg';
        }
        elseif (file_exists($plek . '.png')) {
            return $pad . '.png';
        }

    }

}