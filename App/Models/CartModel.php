<?php

class CartModel extends ModelBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTicketDataById(int $ticketId)
    {
        $sql = "SELECT * FROM Ticket WHERE id = ?";
        return $this->query($sql, [$ticketId])->getFirstResult();
    }

    public function getStageName($ticket) {
        if ($ticket->event == "Dance") {
            $sql = "SELECT A.stageName
                    FROM Artist AS A
                    WHERE A.id =	(	
                                    SELECT A.id
                                    FROM Artist AS A
                                    JOIN DanceArtist AS DA ON DA.artistId = A.id
                                    JOIN DanceTicketArtist AS DTA ON DTA.danceArtistId = DA.id
                                    JOIN DanceTicket AS DT ON DT.id = DTA.danceTicketId
                                    JOIN Ticket AS T ON T.id = DT.ticketId
                                    WHERE T.id = ?
                                    );";

            return $this->query($sql, [$ticket->id])->getFirstResult();
        } else { // jazz
            $sql = "SELECT A.stageName
                    FROM Artist AS A
                    WHERE A.id =	(
                                    SELECT A.id
                                    FROM Artist AS A
                                    JOIN JazzTicket AS JT ON JT.artistId = A.id
                                    JOIN Ticket AS T ON T.id = JT.ticketId
                                    WHERE T.id = ?
                                    );";

            return $this->query($sql, [$ticket->id])->getFirstResult();
        }
    }

}