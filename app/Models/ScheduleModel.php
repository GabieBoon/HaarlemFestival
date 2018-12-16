<?php

class ScheduleModel extends ModelBase
{

    public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
    }

    public function getArtists()
    {
        $sql = "select * from DanceArtist join Artist on artistId = Artist.Id";

        return $this->executeQuery($sql);
    }

    public function getLocations()
    {
        $sql = "select * from Venue where event like 'Dance'";

        return $this->executeQuery($sql);

    }

    public function getTickets()
    {
        $sql = "select * from Ticket as t where t.event = Dance join DanceTicket as dt on t where t.id = td.ticketId";

    }
}