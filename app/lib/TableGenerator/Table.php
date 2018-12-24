<?php

class Table {

    private $day, $startHour, $endHour, $event, $tickets, $eventColumn, $columnCount; //meegegeven vanuit generateTable
    private $rowSource, $rowTitle, $ticketTitle, $ticketFormat, $checkForTickets; //handig om informatie door te geven door de klasse
    private $currentRow, $currentHour, $currentTicket, $foodSessionsPrinted, $historicToursPrinted;  //houd bij welke rij, colom etc je in zit

    public function generateTable($day, $startHour, $endHour, $event, $head = true, $eventColumn = false, $rowSource = NULL, $tickets = NULL)
    {
        //set variabelen
        $this->day = $day;
        $this->startHour = $startHour;
        $this->endHour = $endHour;
        $this->event = $event;
        $this->eventColumn = $eventColumn;
        $this->columnCount = $endHour - $startHour;
        $this->rowSource = $rowSource;
        $this->tickets = $tickets;

        //defaultwaarden tenzij later nog veranderd
        $this->checkForTickets = false;
        $body = true;

        //set waarden die voor elk event verschillend zijn
        switch ($event) {
            case "Dance":
                $this->rowTitle = "name";
                $this->ticketTitle = "venue";
                $this->ticketFormat = ['firstName','preposition','lastName'];
                break;
            case "Historic":
                $this->rowTitle = "language";
                $this->ticketTitle = "startLocation";
                $this->ticketFormat = ['Morning Tour','Midday Tour','Evening Tour'];
                break;
            case "Jazz":
                $this->rowTitle = "name";
                $this->ticketTitle = "venue";
                $this->ticketFormat = ['firstName','preposition','lastName'];
                break;
            case "Food":
                $this->rowTitle = "name";
                $this->ticketTitle = "restaurant";
                $this->ticketFormat = ['Session 1','Session 2','Session 3'];
                break;
            default:
                $body = false;
                break;
        }


        if ($head) {

            $this->generateTableHead();
        }

        if ($body) {

            //check of de waarden goed meegegeven zijn
            if ($this->rowSource != NULL && $this->tickets != NULL) {
                $this->checkForTickets = true;
            }

            $this->generateTableBody();
        }

    }

    private function generateTableHead()
    {

        //start rij
        $this->startTableRow();

        //alleen voor de schedule pagina
        if ($this->eventColumn) {
            $this->generateTableData("Event", 'eventCell');
        }

        //linkerhoek
        $this->generateTableData("Location/Time", 'locationCell');

        //uren
        $this->currentHour = $this->startHour;

        for ($columnNumber = 0; $columnNumber <= $this->columnCount; $columnNumber++) {

            $this->generateTableData($this->currentHour . ":00");
            $this->currentHour++;
            if ($this->currentHour == 24){
                $this->currentHour = 0;
            }
        }

        //einde rij
        $this->endTableRow();

    }

    private function generateTableBody()
    {

        $eventNaamGeprint = false;


        foreach ($this->rowSource as $row) {

            //houd de huidige rij bij
            $this->currentRow = $row;

            //start een nieuwe rij
            $this->startTableRow();
            $this->foodSessionsPrinted = 0;
            $this->historicToursPrinted = 0;


            //alleen voor schedule pagina
            if ($this->eventColumn) {
                if (!$eventNaamGeprint) {
                    $this->generateTableData($this->event, 'eventCell');
                    $eventNaamGeprint = true;
                } else {
                    $this->generateTableData("", 'eventCell');
                }
            }

            //set de naam van de rij
            $title = $this->rowTitle;
            $this->generateTableData($row->$title, 'locationCell');

            //set het huidige uur op het startuur
            $this->currentHour = $this->startHour;

            //maak een cel voor alle urenkolommen
            for ($columnNumber = 0; $columnNumber <= $this->columnCount; $columnNumber++) {
                $this->generateTableData();
                $this->currentHour++;
            }

            $this->endTableRow();
        }
    }

    private function startTableRow()
    {
        echo '<tr>';
    }

    private function endTableRow()
    {
        echo '</tr>' . PHP_EOL; //end + formatting
    }

    private function generateTableData($text = "", $class = "normalCell")
    {
        //maak een cel in de tabel
        include ROOT . 'app' . DS . 'Layouts' . DS . 'Tabellen' . DS . 'TableData' . '.php';
    }

    private function checkForTicket(){

        if ($this->checkForTickets){
            foreach ($this->tickets as $ticket){
                $title = $this->rowTitle;
                $ticketTitle = $this->ticketTitle;

                $startDateTime = explode(' ', $ticket->startTime);
                $startDate = explode('-', $startDateTime[0]);
                $startTime = explode(':', $startDateTime[1]);

                $endDateTime = explode(' ', $ticket->endTime);
                $endDate = explode('-', $endDateTime[0]);
                $endTime = explode(':', $endDateTime[1]);

                if ($ticket->$ticketTitle == $this->currentRow->$title && $startDate[2] == $this->day){


                    if ($startTime[0] == $this->currentHour)
                    {
                        $this->currentTicket = $ticket;

                        $ticketLength = $this->getTicketLength($startTime,$endTime, $startDate, $endDate);

                        include ROOT . 'app' . DS . 'Layouts' . DS . 'Tabellen' . DS . 'TableBlok.php';
                    }
                }
            }
        }

    }

    private function getTicketLength($startTime, $endTime, $startDate, $endDate){

        //mag nog dynamisch vanuit de css worden opgehaald
        $tableWidth = 1250;
        $locationCellWidth = 250;
        $eventCellWidth = 100;


        //verschillende berekeningen voor eindtijd op dezelfde of andere dag
        if ($startDate != $endDate){

            $duration = 24 - $startTime[0] + $endTime[0];
        }
        else {
            $duration =  $endTime[0] - $startTime[0];
        }

        //zorg dat halve uren etc. ook weergegeven worden
        $duration = $duration + $endTime[1] / 60;

        //lengte van de urenkolommen
        $widthOfHourColumns = $tableWidth - $locationCellWidth;


        if ($this->eventColumn){
            $widthOfHourColumns = $widthOfHourColumns - $eventCellWidth;
        }

        $cellWidth = floor($widthOfHourColumns / $this->columnCount);

        $cellWidth = $cellWidth - 2; //borders weghalen van de cellWidth


        $divWidth = $duration * $cellWidth -3; //begin 1 px na de border, eindig 1 px ervoor

        return $divWidth;

    }

    private function showTicket(){

        if ($this->event == "Food" ){
             echo $this->ticketFormat[$this->foodSessionsPrinted];
            $this->foodSessionsPrinted++;
        }
        elseif ($this->event == "Historic"){
            echo $this->ticketFormat[$this->historicToursPrinted];
            $this->historicToursPrinted++;
        }
        else{
            $format = $this->ticketFormat;

            foreach ($format as $item){
                echo $this->currentTicket->$item;
            }
        }

        echo " €". $this->currentTicket->price;
    }
}




