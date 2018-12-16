<?php

class ViewBase {

    protected $head, $body, $layout, $title, $class;

    public function __construct($class, $siteTitle = SITE_TITLE)
    {
        $this->class = $class;
        $this->title = $siteTitle;
    }

    //geef de pagina weer
    public function render(){

        //head
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Head' .'.php';

        //header
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Header' .'.php';

        //content
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . $this->class . 'Layout' . '.php';

        //footer
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Footer' .'.php';
    }

    public function getPicture($pictureName){

        $plek = ROOT . DS . 'images' . DS . $pictureName;

        $pad = "/haarlem-festival/images/$pictureName";

        if (file_exists($plek . '.jpg')){
            return $pad . '.jpg';
        }
        elseif (file_exists($plek . '.png')) {
            return $pad . '.png';
        }

    }

    //table shit
    public function generateTable($startHour, $endHour, $event ,$head = true, $eventColumn = false){

        $body = true;

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
                $body = false;
                break;
        }

        $columnCount = $endHour - $startHour;


        if ($head){
            $this->generateTableHead($startHour, $columnCount, $eventColumn);
        }

        if ($body){
            $this->generateTableBody($columnCount, $rowTitle, $rowSource, $eventColumn, $event);
        }

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
    public function generateTableBody($columnCount, $rowTitle ,$rowSource, $eventColumn, $event){

        $geprint = true;

        foreach($this->$rowSource as $row){
            $this->startTableRow();

            if ($eventColumn){
                if ($geprint){
                    $this->generateTableData($event);
                    $geprint = false;
                }
                else{
                    $this->generateTableData();
                }

            }

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