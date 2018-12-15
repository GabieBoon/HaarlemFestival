<?php

class DanceModel extends ModelBase{

    public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
    }

    public function getArtists(){
        //$sql = "select * from ";
    }
    public function getLocations(){
        $sql = "select * from Venue";

        return $this->executeQuery($sql);

    }
}