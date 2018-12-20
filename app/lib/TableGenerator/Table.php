<?php

class Table {

    private $day, $startHour, $endHour, $event, $tickets, $eventColumn, $columnCount; //meegegeven vanuit generateTable
    private $rowSource, $rowTitle, $ticketTitle, $checkForTickets; //handig om informatie door te geven door de klasse
    private $currentRow, $currentHour, $currentTicket;  //houd bij welke rij, colom etc je in zit

    public function generateTable($day, $startHour, $endHour, $event, $head = true, $eventColumn = false, $rowSource = NULL, $tickets = NULL)
    {
        $this->day = $day;
        $this->startHour = $startHour;
        $this->endHour = $endHour;
        $this->event = $event;
        $this->eventColumn = $eventColumn;
        $this->columnCount = $endHour - $startHour;
        $this->rowSource = $rowSource;
        $this->tickets = $tickets;

        $this->checkForTickets = false;
        $body = true;

        switch ($event) {
            case "Dance":
                //$this->rowSource = "danceLocations";
                $this->rowTitle = "name";
                $this->ticketTitle = "venue";
                break;
            case "Historic":
                //$this->rowSource = "languages";
                $this->rowTitle = "language";
                $this->ticketTitle = "startLocation";
                break;
            case "Jazz":
                //$this->rowSource = "jazzLocations";
                $this->rowTitle = "name";
                $this->ticketTitle = "venue";
                break;
            case "Food":
                //$this->rowSource = "restaurants";
                $this->rowTitle = "name";
                $this->ticketTitle = "restaurant";
                break;
            default:
                $body = false;
                break;
        }


        if ($head) {

            $this->generateTableHead();
        }

        if ($body) {

            if ($this->rowSource != NULL && $this->tickets != NULL) {
                $this->checkForTickets = true;
            }

            $this->generateTableBody();
        }

    }

    public function generateTableHead()
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
        }

        //einde rij
        $this->endTableRow();

    }

    public function generateTableBody()
    {

        $eventNaamGeprint = false;


        foreach ($this->rowSource as $row) {

            $this->currentRow = $row;

            $this->startTableRow();


            if ($this->eventColumn) {
                if (!$eventNaamGeprint) {
                    $this->generateTableData($this->event, 'eventCell');
                    $eventNaamGeprint = true;
                } else {
                    $this->generateTableData("", 'eventCell');
                }
            }

            $title = $this->rowTitle;
            $this->generateTableData($row->$title, 'locationCell');


            $this->currentHour = $this->startHour;

            for ($columnNumber = 0; $columnNumber <= $this->columnCount; $columnNumber++) {
                $this->generateTableData();
                $this->currentHour++;
            }

            $this->endTableRow();
        }
    }

    public function startTableRow()
    {
        echo '<tr>';
    }

    public function endTableRow()
    {
        echo '</tr>' . PHP_EOL;
    }

    public function generateTableData($text = "", $class = "normalCell")
    {
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Tabellen' . DS . 'TableData' . '.php';
    }

    public function checkForTicket(){

        if ($this->checkForTickets){
            foreach ($this->tickets as $ticket){
                $title = $this->rowTitle;
                $ticketTitle = $this->ticketTitle;

                $startDateTime = explode(' ', $ticket->startTime);
                $startDate = explode('-', $startDateTime[0]);
                $startTime = explode('-', $startDateTime[1]);

                if ($ticket->$ticketTitle == $this->currentRow->$title && $startDate[2] == $this->day){


                    if ($startTime[0] == $this->currentHour)
                    {
                        $this->currentTicket = $ticket;

                        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Tabellen' . DS . 'TableBlok.php';
                    }
                }
            }
        }

    }

    public function showTicket(){
        echo "ticket info nog netjes weergeven";
    }
}




