<?php

class JazzModel extends ModelBase {

    public function __construct()
    {
        parent::__construct();
    }

    public function getArtistsForPage($pageNumber) {
        $sql = "SELECT id, stageName
                FROM Artist
                WHERE bio = 'JazzBand'
                ORDER BY stageName ASC
                LIMIT 6
                OFFSET " . intval(($pageNumber * 6) - 6) . ";"; // amount of shown artists per page is 6

        return $this->_db->query($sql)->getResult();
    }

    //geschreven door David, nodig voor schedule, hoort qua inhoud bij foodmodel
    public function getJazzTickets(){
        $sql = "SELECT t.id, t.price, t.startTime, t.endTime, t.ticketsAvailable, t.event, t.isAllAccessTicket, v.name as venue, 
                a.firstName, a.preposition, a.lastName, a.stageName FROM Ticket as t 
                join JazzTicket as jt on t.id = jt.ticketId 
                join Venue as v on v.id = jt.venueId join Artist as a on a.id = jt.artistId";
        return $this->_db->query($sql)->getResult();
    }
}