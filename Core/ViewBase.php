<?php

class ViewBase
{

    protected $head, $body, $layout, $title;
    protected $_className,
        $_head,
        $_header = DEFAULT_NAME,
        $_body,
        $_footer = DEFAULT_NAME,
        $_siteTitle = SITE_TITLE,
        $_outputBuffer,
        $_layout = DEFAULT_NAME,
        $_bgImage;

    public function __construct($_className, $siteTitle = SITE_TITLE)
    {
        $this->_className = $_className;
        //$this->title = $siteTitle;
        
        //include ROOT . 'app' . DS . 'lib' . DS . 'TableGenerator' . DS . 'Table.php';
        //$this->_table = new Table();
    }



    //geef de pagina weer
    public function render($layoutName = null)
    {

        if ($layoutName == null) {
            $layoutName = $this->_className . 'Layout.php';
        } else {
            $layoutName .= 'Layout.php';
            $layoutName += 'Layout.php';
        }

        //head
        include ROOT . 'App' . DS . 'Layouts' . DS . 'Head.php';

        //header
        include ROOT . 'App' . DS . 'Layouts' . DS . 'Header.php';

        //content
        include ROOT . 'App' . DS . 'Layouts' . DS . $layoutName;

        //footer
        include ROOT . 'App' . DS . 'Layouts' . DS . 'Footer.php';
    }

    public function printTickets()
    {
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

    public function renderView(string $viewName)
    {
        $viewArray = explode('/', $viewName);
        $viewString = implode(DS, $viewArray);

        $pathToHeader = ROOT . 'app' . DS . 'Views' . DS . 'Layouts' . DS . 'Includes' . DS . $this->_header . 'Header.php';
        $this->check_include($pathToHeader);

        $pathToView = ROOT . 'App' . DS . 'Views' . DS . $viewString . '.php';
        $this->check_include($pathToView);

        $pathToFooter = ROOT . 'app' . DS . 'Views' . DS . 'Layouts' . DS . 'Includes' . DS . $this->_footer . 'Footer.php';
        $this->check_include($pathToFooter);

        $pathToLayout = ROOT . 'App' . DS . 'Views' . DS . 'Layouts' . DS . $this->_layout . 'Layout.php';
        $this->check_include($pathToLayout);
    }

    //miss naar helper?
    function check_include(string $pathToSomething)
    {
        if (file_exists($pathToSomething)) {
            include($pathToSomething);
        } else {
            die('The file \"' . $pathToSomething . '\" does not exist.');
        }
    }

    //basically a getter / setter
    public function content($type)
    {
        switch ($type) {
            case 'head':
                return $this->_head;
            case 'header':
                return $this->_header;
            case 'body':
                return $this->_body;
            case 'footer':
                return $this->_footer;
            default:
                return false;
        }
    }

//output buffering
    public function start($type)
    {
        $this->_outputBuffer = $type;
        ob_start();
    }

    public function end()
    {
        if ($this->_outputBuffer == 'head') {
            if (isset($this->_head)) {
                $this->_head .= ob_get_clean();
            } else {
                $this->_head = ob_get_clean();
            }
        } elseif ($this->_outputBuffer == 'header') {
            $this->_header = ob_get_clean();
        } elseif ($this->_outputBuffer == 'body') {
            $this->_body = ob_get_clean();
        } elseif ($this->_outputBuffer == 'footer') {
            $this->_footer = ob_get_clean();
        } else {
            die('You first have to run the start method!');
        }
    }

    //getters and setters

    //Site title
    public function getSiteTitle()
    {
        return $this->_siteTitle;
    }
    public function setSiteTitle(string $title)
    {
        $this->_siteTitle = $title;
    }

    //Header
    public function setHeader(string $headerName = DEFAULT_NAME)
    {
        $this->_header = $headerName;
    }

    // public function getHeaderColour($className = null)
    // {
    //     //header("Content-type: text/css; charset: UTF-8");
    //     if (!isset($className)) {
    //         $className = $this->_className;
    //     }
    //     switch (ucfirst($className)) {
    //         case 'Dance':
    //             $activeColour = "#3083D0";
    //             break;
    //         case 'Jazz':
    //             $activeColour = "#440E62";
    //             break;
    //         case 'Historic':
    //             $activeColour = "#DB1F1F";
    //             break;
    //         case 'Food':
    //             $activeColour = "#F0841B";
    //             break;
    //         case 'Schedule':
    //             $activeColour = "#DCC500";
    //             break;
    //         case 'Cart':
    //             $activeColour = "#849A7D";
    //             break;
    //         default:
    //             $activeColour = "#797979";
    //             break;
    //     }
    //     echo $activeColour;
    //     //return $activeColour;
    // }
    
    //Footer
    public function setFooter(string $footerName = DEFAULT_NAME)
    {
        $this->_footer = $footerName;
    }

    //layout
    public function setLayout(string $layoutName = DEFAULT_NAME)
    {
        $this->_layout = $layoutName;
    }

    //BackgroundImage
    public function setBgImage(string $bgImageName)
    {
        $this->_bgImage = $bgImageName;
    }
    public function getBgImage()
    {
        $pathToBgImage = PROOT . 'Public/Images/Backgrounds/' . $this->_bgImage;
        echo ('
            <!--dynamic background image -->
            <style type = "text/css">
                .background-image {
                    background:#FFF url(' . $pathToBgImage . ');
                    background-size:cover;
                    background-repeat:no-repeat ;
                    background-position:center center;
                }
            </style>
        ');
    }

    public function insert($path)
    {
        include ROOT . 'App' . DS . 'Views' . DS . $path . '.php';
    }

    public function partial($group, $partial)
    {
        include ROOT . 'App' . DS . 'Views' . DS . $group . DS . 'Partials' . DS . $partial . '.php';
    }

}