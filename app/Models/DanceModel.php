<?php

class DanceModel extends ModelBase{

    //public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
    }


    public function getTickets(){
        $sql = "select * from Ticket as t where t.event = Dance join DanceTicket as dt on t where t.id = td.ticketId";

    }
}