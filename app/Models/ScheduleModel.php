<?php

class ScheduleModel extends ModelBase
{

    //public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
    }

    public function getTickets()
    {
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

    public function getLanguages(){
        $sql = "SELECT DISTINCT language FROM `HistoricTicket`";
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

    public function getJazzTickets(){
        $sql = "SELECT t.id, t.price, t.startTime, t.endTime, t.ticketsAvailable, t.event, t.isAllAccessTicket, v.name as venue, 
                a.firstName, a.preposition, a.lastName FROM Ticket as t 
                join JazzTicket as jt on t.id = jt.ticketId 
                join Venue as v on v.id = jt.venueId join Artist as a on a.id = jt.artistId";
        return $this->_db->query($sql)->getResult();
    }

    public function getFoodTickets(){
        $sql = "SELECT t.id, t.price, t.startTime, t.endTime, t.ticketsAvailable, t.event, t.isAllAccessTicket, v.name as restaurant, 
                ft.price12 FROM Ticket as t 
                join FoodTicket as ft on t.id = ft.ticketId 
                join Restaurant as r on r.id = ft.restaurantId 
                join Venue as v on v.id = r.venueId";
        return $this->_db->query($sql)->getResult();
    }

    public function getHistoricTickets(){
        $sql = "SELECT t.id, t.price, t.startTime, t.endTime, t.ticketsAvailable, t.event, t.isAllAccessTicket, v.name as startLocation, 
                ht.language, ht.isFamilyTicket FROM Ticket as t 
                join HistoricTicket as ht on t.id = ht.ticketId 
                join Venue as v on v.id = ht.venueId";
        return $this->_db->query($sql)->getResult();
    }


}


