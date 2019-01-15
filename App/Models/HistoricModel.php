<?php

class HistoricModel extends ModelBase
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getLanguages()
    {
        $sql = "SELECT DISTINCT language FROM `HistoricTicket`";
        return $this->_db->query($sql)->getResult();
    }

    public function getHistoricTickets()
    {
        $sql = "SELECT t.id, t.price, t.startTime, t.endTime, t.ticketsAvailable, t.event, t.isAllAccessTicket, v.name as startLocation, 
                ht.language, ht.isFamilyTicket FROM Ticket as t 
                join HistoricTicket as ht on t.id = ht.ticketId 
                join Venue as v on v.id = ht.venueId";
        return $this->_db->query($sql)->getResult();
    }


}