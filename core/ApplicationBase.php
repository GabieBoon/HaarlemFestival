<?php


class ApplicationBase {

    public function __construct($className)
    {
        //als er geen Cart bestaat, maak hem aan
        if (!array_key_exists('Cart', $_SESSION)){
            $_SESSION['Cart'] = array();
        }

        //hou bij welke pagina er als laatste bezocht is
        if (array_key_exists('CurrentPage', $_SESSION)){
            $_SESSION['LastVisited'] = $_SESSION['CurrentPage'];
        }
        $_SESSION['CurrentPage'] = $className;
    }


}

