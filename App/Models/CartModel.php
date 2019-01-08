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

}