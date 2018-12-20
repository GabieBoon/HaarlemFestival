<?php

class DanceModel extends ModelBase{

    //public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
    }


    public function getTickets(){
        $sql = "select * from Ticket as t where t.event = Dance join DanceTicket as dt on t where t.id = td.ticketId";
        return $this->_db->query($sql)->getResult();
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

    public function getDanceTickets(){
        $sql = "SELECT t.id, t.price, t.startTime, t.endTime, t.ticketsAvailable, t.event, t.isAllAccessTicket, v.name as venue, 
                a.firstName, a.preposition, a.lastName FROM Ticket as t 
                join DanceTicket as dt on t.id = dt.ticketId 
                join Venue as v on dt.venueId = v.id 
                join DanceTicketArtist as dta on t.id = dta.DanceTicketId 
                join DanceArtist as da on da.id = dta.danceArtistId 
                join Artist as a on a.id = da.artistId";
        return $this->_db->query($sql)->getResult();
    }
}