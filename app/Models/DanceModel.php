<?php

class DanceModel extends ModelBase{

    public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
    }

    public function getArtists(){
        $sql = "select * from DanceArtist join Artist on artistId = Artist.Id";

        return $this->executeQuery($sql);
    }
    public function getLocations(){
        $sql = "select * from Venue";

        return $this->executeQuery($sql);

    }
}