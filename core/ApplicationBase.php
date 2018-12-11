<?php


class ApplicationBase {

    public function __construct($class)
    {
        //als er geen winkelwagen bestaat, maak hem aan
        if (!array_key_exists('Winkelwagen', $_SESSION)){
            $_SESSION['Winkelwagen'] = array();
        }

        //hou bij welke pagina er als laatste bezocht is
        if (array_key_exists('CurrentPage', $_SESSION)){
            $_SESSION['LastVisited'] = $_SESSION['CurrentPage'];
        }
        $_SESSION['CurrentPage'] = $class;
    }


}

