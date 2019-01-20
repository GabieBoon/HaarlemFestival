<?php

class CartModel extends ModelBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTicketDataById($ticketId)
    {
        $ticketEvent = $this->getTicketEventById($ticketId)->event;

        $sql = "";
        switch ($ticketEvent) {
            case "Dance":
                $sql = "SELECT T.id, T.price, T.startTime, T.endTime, T.ticketsAvailable, T.event, T.isAllAccessTicket,
                          V.name AS venue, A.firstName, A.preposition, A.lastName, A.stageName
                        FROM Ticket AS T
                        JOIN DanceTicket AS DT ON T.id = DT.ticketId
                        JOIN Venue AS V on V.id = DT.venueId
                        JOIN DanceTicketArtist AS DTA ON DTA.DanceTicketId = T.id
                        JOIN DanceArtist AS DA ON DA.id = DTA.danceArtistId
                        JOIN Artist AS A ON A.id = DA.artistId
                        WHERE T.id = ?;";
                break;
            case "Jazz":
                $sql = "SELECT T.id, T.price, T.startTime, T.endTime, T.ticketsAvailable, T.event, T.isAllAccessTicket,
                          V.name AS venue, A.firstName, A.preposition, A.lastName, A.stageName
                        FROM Ticket AS T
                        JOIN JazzTicket AS JT ON T.id = JT.ticketId
                        JOIN Venue AS V ON V.id = JT.venueId
                        JOIN Artist AS A ON A.id = JT.artistId
                        WHERE T.id = ?;";
                break;
            case "Food":
                $sql = "SELECT T.id, T.price, T.startTime, T.endTime, T.ticketsAvailable, T.event, T.isAllAccessTicket,
                          V.name AS restaurant, FT.price12
                        FROM Ticket AS T
                        JOIN FoodTicket AS FT ON T.id = FT.ticketId
                        JOIN Restaurant AS R ON R.id = FT.restaurantId
                        JOIN Venue AS V ON V.id = R.venueId
                        WHERE T.id = ?;";
                break;
            case "Historic":
                $sql = "SELECT T.id, T.price, T.startTime, T.endTime, T.ticketsAvailable, T.event, T.isAllAccessTicket,
                          V.name AS startLocation, HT.language, HT.familyTicketPrice
                        FROM Ticket AS T 
                        JOIN HistoricTicket AS HT ON T.id = HT.ticketId 
                        JOIN Venue AS V ON V.id = HT.venueId
                        WHERE T.id = ?;";
                break;
        }

        return $this->query($sql, [$ticketId])->getFirstResult();
    }

    public function getTicketEventById($ticketId) {
        $sql = "SELECT event FROM Ticket WHERE id = ?";

        return $this->query($sql, [$ticketId])->getFirstResult();
    }

//    public function getStageName($ticket) {
//        if ($ticket->event == "Dance") {
//            $sql = "SELECT A.stageName
//                    FROM Artist AS A
//                    WHERE A.id =	(
//                                    SELECT A.id
//                                    FROM Artist AS A
//                                    JOIN DanceArtist AS DA ON DA.artistId = A.id
//                                    JOIN DanceTicketArtist AS DTA ON DTA.danceArtistId = DA.id
//                                    JOIN DanceTicket AS DT ON DT.id = DTA.danceTicketId
//                                    JOIN Ticket AS T ON T.id = DT.ticketId
//                                    WHERE T.id = ?
//                                    );";
//
//            return $this->query($sql, [$ticket->id])->getFirstResult();
//        } else { // jazz
//            $sql = "SELECT A.stageName
//                    FROM Artist AS A
//                    WHERE A.id =	(
//                                    SELECT A.id
//                                    FROM Artist AS A
//                                    JOIN JazzTicket AS JT ON JT.artistId = A.id
//                                    JOIN Ticket AS T ON T.id = JT.ticketId
//                                    WHERE T.id = ?
//                                    );";
//
//            return $this->query($sql, [$ticket->id])->getFirstResult();
//        }
//    }

}