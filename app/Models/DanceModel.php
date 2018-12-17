<?php

class DanceModel extends ModelBase{

    //public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
        //$this->_setTable('Ticket');
        //formatted_print_r();
    }


    public function getTickets(){
        $sql = "select * from Ticket as t where t.event = Dance join DanceTicket as dt on t where t.id = td.ticketId";
    }

    public function getLocations($event)
    {
        $sql = "select * from Venue where event like ?";
        return $this->_db->query($sql, [$event])->getResult();
    }

    public function getDanceArtists()
    {
        $sql = "select * from DanceArtist join Artist on artistId = Artist.Id";
        return $this->_db->query($sql)->getResult();
    }
}