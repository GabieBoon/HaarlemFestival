<?php

class WinkelwagenModel extends ModelBase{
    public function __construct()
    {
        parent::__construct();
    }

    public function addTicket($ticketId){
        $sql = "SELECT * FROM Tickets WHERE id = $ticketId";

        //$result = $this->conn->query($sql);

        $result = array();
        $result['id'] = 1;
        $result['price'] = 2.50;
        $result['artist'] = 'Armin van Buuren';

        return $result;
    }



    public function dbTest(){
        $sql = "SELECT * FROM test ";
        $result = $this->conn->query($sql);

        $data= [];

        foreach ($result as $row){
            //echo $row['id'] . " ";
            //echo $row['testcol'] . " ";

            $data[] = $row['id'] . " " . $row['testcol'] . " ";
        }

        return $data;
    }
}