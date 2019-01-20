<?php

class ViewBase
{

    protected $head, $body, $layout, $title;
    protected $_className,
              $_action,
              //$_header = DEFAULT_NAME,
              //$_footer = DEFAULT_NAME,
              $_siteTitle = SITE_TITLE,
              $_outputBuffer,
              $_layout = DEFAULT_NAME,
              $_bgImage;

    public function __construct($_className, $_action)
    {
        $this->_className = $_className;
        $this->_action = $_action;

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
        //view
        $this->check_include(ROOT . 'app' . DS . 'Views' . DS . $this->sanitizePath($viewName) . '.php');

        //layout
        $this->check_include(ROOT . 'app' . DS . 'Views' . DS . 'Layouts' . DS . $this->_layout . 'Layout.php');
    }

    public function check_include(string $pathToSomething)
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
        $type = "_" . $type;
        if (isset($this->$type)) {
            return $this->$type;
        }
        return false;
    }

//output buffering
    public function start($type)
    {
        $this->_outputBuffer = $type;
        ob_start();
    }

    public function end()
    {
        $type = "_" . $this->_outputBuffer;
        if (isset($this->$type) && ($this->$type != DEFAULT_NAME)) {
            $this->$type .= ob_get_clean();
        } else {
            $this->$type = ob_get_clean();
        }
    }

    //getters and setters

    public function setVar(string $varName, $value)
    {
        $this->{$varName} = $value;
    }

    public function assign(string $varName, $value)
    {
        $this->data[$varName] = $value;
    }

    // public function layoutMap(array $layoutMap)
    // {
    //     if (!isset($layoutMap)) {
    //         $layoutMap = array([
    //             'head' => null,
    //             'header' => DEFAULT_NAME,
    //             'body' => null,
    //             'footer' => DEFAULT_NAME,
    //             'layout' => DEFAULT_NAME,
    //             'bgImage' => null
    //         ]);
    //     }
    //     $this->_layoutMap = $layoutMap;
    // }



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
    // public function setHeader(string $headerName)
    // {
    //     $this->_header = $headerName;
    // }

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
    //         case 'Food':
    //             $activeColour = "#F0841B";
    //             break;
    //         case 'Historic' :
    //             $activeColour = "#DB1F1F";
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
    // public function setFooter(string $footerName)
    // {
    //     $this->_footer = $footerName;
    // }

    //layout
    public function setLayout(string $layoutName)
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
        $this->check_include(ROOT . 'App' . DS . 'Views' . DS . $this->sanitizePath($path) . '.php');
    }

    public function partial($group, $partial)
    {
        $this->check_include(ROOT . 'App' . DS . 'Views' . DS . $group . DS . 'Partials' . DS . $partial . '.php');
    }

    public function sanitizePath(string $path)
    {
        $pathArray = explode('/', $path);
        return implode(DS, $pathArray);
    }
}