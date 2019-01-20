<?php

class DanceModel extends ModelBase{

    public function __construct()
    {
        parent::__construct();
    }

    public function getLocations($event)
    {
        $sql = "select * from Venue where event like ?";
        return $this->_db->query($sql, [$event])->getResult();
    }

    public function getLocation($event, $locationId)
    {
        $sql = "select * from Venue where event like ? and id = ?";
        return $this->_db->query($sql, [$event, $locationId])->getFirstResult();
    }

    public function getDanceArtists()
    {
        $sql = "select * from DanceArtist join Artist on artistId = Artist.Id ";
        return $this->_db->query($sql)->getResult();
    }

    //lijkt op getDanceArtists maar krijgt maar een resultaat terug, geen array van resultaten
    public function getDanceArtist($artistId)
    {
        $sql = "select a.stageName, a.firstName, a.preposition, a.lastName, a.id as id, a.bio, da.rank, ms.musicStyle from DanceArtist as da
                join Artist as a on da.artistId = a.Id
                join DanceArtistMusicStyle as dams on dams.danceArtistId = da.id
                join MusicStyle as ms on dams.musicStyleId = ms.id
                where a.Id = ?";

        $artist = $this->_db->query($sql, [$artistId])->getResult();

        $artist = $this->ArraysVoorKoppeltabellen($artist);

        return $artist[0];


    }




    public function getDanceTickets(){
        $sql = "SELECT t.id, t.price, t.startTime, t.endTime, t.ticketsAvailable, t.event, t.isAllAccessTicket, v.name as venue, 
                a.firstName, a.preposition, a.lastName, a.stageName FROM Ticket as t 
                join DanceTicket as dt on t.id = dt.ticketId 
                join Venue as v on dt.venueId = v.id 
                join DanceTicketArtist as dta on t.id = dta.DanceTicketId 
                join DanceArtist as da on da.id = dta.danceArtistId 
                join Artist as a on a.id = da.artistId";
        $tickets = $this->_db->query($sql)->getResult();

        //zorg dat meerdere artiesten bij één ticket goed worden weergegeven
        $tickets = $this->ArraysVoorKoppeltabellen($tickets);

        return $tickets;
    }

    public function getAllAccessTicketsDance(){
        $sql = "SELECT * FROM `Ticket` where isAllAccessTicket = true and event = 'Dance'";
        return $this->_db->query($sql)->getResult();

    }
}