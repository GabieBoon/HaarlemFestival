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


    // mostly edit schedule/timetable
    public function getDatesByEvent(string $event)
    {
        $sql = "SELECT CAST(startTime AS DATE) AS 'date' FROM Ticket where event = ? AND isAllAccessTicket = 0 GROUP BY CAST(startTime AS DATE);";

        return $this->query($sql, [$event])->getResult();
    }

    public function getEventsByEventDate(string $event, string $date)
    {
        $sql = "SELECT id AS ticketId, CAST(startTime AS TIME) AS 'startTime', CAST(endTime AS TIME) AS 'endTime', CAST(startTime AS DATE) AS 'date' FROM Ticket WHERE event = ? AND CAST(startTime AS DATE) = ? AND isAllAccessTicket = 0 ORDER BY startTime; ";// ORDER BY startTime

        return $this->query($sql, [$event, $date])->getResult();
    }

    public function getArtistAndLocationByTicketId(string $event, int $ticketId)
    {
        $event = ucFirst(strtolower($event));
        if ($event === 'Dance') {
            $sql= "SELECT 
                T.ticketId AS ticketId,
                T.sessionType,
                V.id AS venueId,
                V.name,
                DTA.danceArtistId AS danceArtistId,
                A.stageName AS stageName

                FROM DanceTicket AS T
                JOIN DanceTicketArtist AS DTA ON T.id = DTA.danceTicketId
                JOIN DanceArtist AS DA ON DTA.danceArtistId = DA.id
                JOIN Artist AS A on DA.artistId = A.id
                JOIN Venue AS V ON T.venueId = V.id

                WHERE ticketId = ?;
            ";
        } elseif ($event === 'Jazz') {
            $sql = "SELECT
                T.ticketId as ticketId,
                A.id as artistId,
                A.stageName,
                V.id as venueId,
                V.name

                FROM JazzTicket as T
                JOIN Artist as A ON T.artistId = A.id
                JOIN Venue as V ON T.venueId = V.id

                WHERE ticketId = ?;
            ";
        } elseif ($event === 'Food') {
            $sql = "SELECT 
                t.id as ticketId,
                v.name as restaurant

                FROM Ticket as t 
                join FoodTicket as ft on t.id = ft.ticketId 
                join Restaurant as r on r.id = ft.restaurantId 
                join Venue as v on v.id = r.venueId
            
                WHERE ticketId = ?;
            ";
        } elseif ($event === 'Historic') {
            $sql = "SELECT 
                t.id as ticketId,
                v.name as startLocation, 
                ht.language
                
                FROM Ticket as t 
                join HistoricTicket as ht on t.id = ht.ticketId 
                join Venue as v on v.id = ht.venueId
                
                WHERE ticketId = ?;
                ";
        }
        
        return $this->query($sql, [$ticketId])->getFirstResult();
    }


    

}


