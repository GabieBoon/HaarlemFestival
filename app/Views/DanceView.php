<?php

class DanceView extends ViewBase{

    public $artists, $locations;

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function helloWorld(){
        echo "Hello World";
    }

    public function showPage($artists, $locations){

        $this->artists = $artists;
        $this->locations = $locations;

        $this->render();
    }

    public function showLocations(){
        foreach ($this->locations as $location){
            $title = $location->name;
            include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'DanceBlok' .'.php';
            //echo $location->name . "<br>";
        }
    }

    public function showArtists(){
        foreach ($this->artists as $artist){
            $title = $artist->firstName . " " . $artist->preposition . " " . $artist->lastName;
            include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'DanceBlok' .'.php';
        }
    }


    //moet nog in aparte klasse
    public function generateTable($startHour, $endHour, $event ,$head = true, $eventColumn = false){

        switch ($event) {
            case "Dance":
                $rowSource = "locations";
                $rowTitle = "name";
                break;
            case "Historic":
                $rowSource = "languages";
                $rowTitle = "name";
                break;
            case "Jazz":
                $rowSource = "locations";
                $rowTitle = "name";
                break;
            case "Food":
                $rowSource = "restaurants";
                $rowTitle = "name";
                break;
            default:
                echo "nope";
                break;
        }

        $columnCount = $endHour - $startHour;


        if ($head){
            $this->generateTableHead($startHour, $columnCount, $eventColumn);
        }

        $this->generateTableBody($columnCount, $rowTitle, $rowSource);
    }


    public function generateTableHead($startHour, $columnCount, $eventColumn){

        //start rij
        $this->startTableRow();

        //alleen voor de schedule pagina
        if ($eventColumn){
            $this->generateTableData("Event");
        }

        //linkerhoek
        $this->generateTableData("Location/Time");

        //uren
        for ($columnNumber = 0; $columnNumber <= $columnCount; $columnNumber++){

            $this->generateTableData($startHour . ":00");
            $startHour++;
        }

        //einde rij
        $this->endTableRow();

    }

    public function generateTableData($data = ""){

        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Tabellen'  . DS .'TableData' .'.php';
    }


    public function generateTableBody($columnCount, $rowTitle ,$rowSource){

        foreach($this->$rowSource as $row){
           $this->startTableRow();

           $this->generateTableData($row->$rowTitle);

           for ($columnNumber = 0; $columnNumber <= $columnCount; $columnNumber++){
               $this->generateTableData();
           }

           $this->endTableRow();
        }
    }

    public function startTableRow(){
        echo '<tr>';
    }

    public function endTableRow(){
        echo '</tr>';
    }
}