<?php


class ApplicationBase {

    public function __construct($className, $action)
    {
        //als er geen Cart bestaat, maak hem aan
        if (!array_key_exists('Cart', $_SESSION)){
            $_SESSION['Cart'] = array();
        }

        
        //hou bij welke pagina er als laatste bezocht is
        if (array_key_exists('CurrentPage', $_SESSION)){
            $_SESSION['LastVisited'] = $_SESSION['CurrentPage'];

            // for debuggin purposes
            //
            // if (!array_key_exists('PageHistory', $_SESSION)) {
            //     $_SESSION['PageHistory'] = [$_SESSION['CurrentPage']];
            // } else {
            //     $count = count($_SESSION['PageHistory']);
            //     $_SESSION['PageHistory'][$count] = $_SESSION['CurrentPage'];
            // }
            //
        }

        // $_SESSION['CurrentPage'] = $className;
        $_SESSION['CurrentPage'] = Router::formatCurrentPage($className, $action);
    }


}

