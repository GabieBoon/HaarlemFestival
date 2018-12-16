<?php

class ScheduleView extends ViewBase{

    public $artists, $locations;

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function showPage($artists, $locations){

        $this->artists = $artists;
        $this->locations = $locations;

        $this->render();
    }

    //moet nog in aparte klasse

}