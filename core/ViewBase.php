<?php

class ViewBase {

    protected $head, $body, $layout, $title, $class, $backgroundImg;
    protected $_head,
              $_body,
              $_siteTitle,
              $_outputBuffer,
              $_layout = DEFAULT_LAYOUT;

    public function __construct($class, $siteTitle = SITE_TITLE)
    {
        $this->class = $class;
        $this->title = $siteTitle;
        $this->backgroundImg = PROOT."public/images/foodbackground.jpg";
    }



    //geef de pagina weer
    public function render($layoutName = NULL){

        if ($layoutName == NULL){
            $layoutName = $this->class . 'Layout.php';
        }else {
            $layoutName .= 'Layout.php';
            $layoutName += 'Layout.php';
        }

        //head
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Head.php';

        //header
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Header.php';

        //content
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . $layoutName;

        //footer
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Footer.php';
    }

    //plz move to helper class..
    public function getPicture($pictureName){ // desperately in need of some rework


        //plek en pad zijn hetzelfde?
        $plek = ROOT . DS . 'public' . DS . 'images' . DS . $pictureName ;

        $pad = "/haarlem-festival/public/images/" . $pictureName;


        // als "plek" .jpg bestaat, return "pad". jpg en anders "pad" . png? waarom geen return "plek"
        if (file_exists($plek . '.jpg')) {
            return $pad . '.jpg';
        } elseif (file_exists($plek . '.png')) {
            return $pad . '.png';
        }

    }

    //plz move to genTableView or scheduleView
    //table shit, misschien nog een aparte class voor maken
    public function generateTable($startHour, $endHour, $event, $head = true, $eventColumn = false)
    {

        $body = true;

        switch ($event) {
            case "Dance":
                $rowSource = "danceLocations";
                $rowTitle = "name";
                break;
            case "Historic":
                $rowSource = "languages";
                $rowTitle = "language";
                break;
            case "Jazz":
                $rowSource = "jazzLocations";
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


        if ($head) {
            $this->generateTableHead($startHour, $columnCount, $eventColumn);
        }

        if ($body) {
            $this->generateTableBody($columnCount, $rowTitle, $rowSource, $eventColumn, $event);
        }

    }
    //plz move to genTableView or scheduleView
    public function generateTableHead($startHour, $columnCount, $eventColumn)
    {

        //start rij
        $this->startTableRow();

        //alleen voor de schedule pagina
        if ($eventColumn) {
            $this->generateTableData("Event", 'eventCell');
        }

        //linkerhoek
        $this->generateTableData("Location/Time", 'locationCell');

        //uren
        for ($columnNumber = 0; $columnNumber <= $columnCount; $columnNumber++) {

            $this->generateTableData($startHour . ":00");
            $startHour++;
        }

        //einde rij
        $this->endTableRow();

    }

    //plz move to genTableView or scheduleView
    public function generateTableData($text = "", $class = "normalCell", $event = NULL, $rowName = NULL, $rowTitle = NULL)
    {
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Tabellen' . DS . 'TableData' . '.php';
    }

    //plz move to genTableView or scheduleView
    public function generateTableBody($columnCount, $rowTitle, $rowSource, $eventColumn, $event)
    {                 

        $geprint = true;
       //$object = $this->class . 'View';
        if (!is_array($this->$rowSource)) {
            return false;
        }
        foreach ($this->$rowSource as $row) {
            $this->startTableRow();

            if ($eventColumn) {
                if ($geprint) {
                    $this->generateTableData($event, 'eventCell');
                    $geprint = false;
                } else {
                    $this->generateTableData("", 'eventCell');
                }
            }

            $this->generateTableData($row->$rowTitle, 'locationCell');

            for ($columnNumber = 0; $columnNumber <= $columnCount; $columnNumber++) {
                $this->generateTableData();
            }

            $this->endTableRow();
        }
    }
    //plz move to genTableView or scheduleView
    public function startTableRow()
    {
        echo '<tr>';
    }
    //plz move to genTableView or scheduleView
    public function endTableRow()
    {
        echo '</tr>';
    }

    public function checkForTicket($event, $rowName, $rowTitle){
        if ($event != NULL && $rowName != NULL){
            $ticketSource = strtolower($event) . "Tickets";

            foreach ($this->$ticketSource as $ticket){
                if ($ticket[$rowTitle] == $rowName && $ticket['startTime'] == "de tijd"){

                }
            }



        }

    }

    public function printTickets() {
        foreach ($_SESSION['Cart'] as $ticket) {
            $startTime = explode(' ', $ticket->startTime);
            $endTime = explode(' ', $ticket->endTime);

            echo "<li>" . PHP_EOL;
            echo "    <span><b>$ticket->event ticket</b></span>" . PHP_EOL;
            echo "    <ul>" . PHP_EOL;
            echo "        <li>Date: $startTime[0]</li>" . PHP_EOL;
            echo '        <li>Time: ' . substr($startTime[1], 0, -3) . ' - ' . substr($endTime[1], 0, -3) . '</li>' . PHP_EOL;
            echo "        <li>Price: &euro;$ticket->price</li>" . PHP_EOL;
            echo "    </ul>" . PHP_EOL;
            echo "</li>" . PHP_EOL;
        }
    }




    public function render_curtis($viewName)
    {
        $viewArray = explode('/', $viewName);
        $viewString = implode(DS, $viewArray);

        $basePath = ROOT . DS . 'App' . DS . 'Views' . DS;
        $pathToView = $basePath . $viewString . '.php';
        $pathToLayout = $basePath . DS . 'Layouts' . DS . $this->_layout . 'Layout.php';

        if (file_exists($pathToView)) {
            include($pathToView);
            include($pathToLayout);
        } else {
            die('The view \"' . $viewName . '\" does not exist.');
        }
    }

    //basically a getter / setter
    public function content($type)
    {
        switch ($type) {
            case 'head':
                return $this->_head;
                //break;
            case 'body':
                return $this->_body;
                //break;     
            default:
                return false;
                //break;
        }
    }


    public function start($type)
    {
        $this->_outputBuffer = $type;
        ob_start();
    }

    public function end()
    {
        if ($this->_outputBuffer == 'head') {
            $this->_head = ob_get_clean();
        } elseif ($this->_outputBuffer == 'body') {
            $this->_body = ob_get_clean();
        } else {
            die('You first have to run the start method!');
        }
    }

    public function getSiteTitle()
    {
        if ($this->_siteTitle == '') {
            return SITE_TITLE;
        }
        return $this->_siteTitle;
    }

    public function setSiteTitle(string $title)
    {
        $this->_siteTitle = $title;
    }

    public function setLayout(string $path)
    {
        $this->_layout = $path;
    }

}