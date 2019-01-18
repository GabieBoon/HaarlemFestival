<?php

class ScheduleModel extends ModelBase
{

    //public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
    }

    public function getLocations($event)
    {
        $sql = "select * from Venue where event like ?";

        return  $this->_db->query($sql, [$event])->getResult();
    }

}


