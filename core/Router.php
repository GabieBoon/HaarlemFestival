<?php

Class Router{


//jasper

    // naming convention moet ff worden aangepast
    public static function route($url) 
    {
        //set controller
        if (isset($url[0]) && ($url[0] != '')) {

            $className = ucwords(strtolower($url[0]));//first every word to lowercase, then capitalize every word.
        } else {
            $className = DEFAULT_CONTROLLER;
        }
        $controllerName = $className . 'Controller';
        array_shift($url);

        //set action
        if (isset($url[0]) && ($url[0] != '')) {
            $action = strtolower($url[0]);
        } else {
            $action = 'index';
        }
        $actionName = $action . 'Action';
        array_shift($url);
        
        //set parameters
        $queryParams = $url;

        if (method_exists($controllerName, $actionName)) {
            $dispatch = new $controllerName($className, $actionName);
            call_user_func_array([$dispatch, $actionName], $queryParams);
        } else {
            die('That method does not exist in the controller "' . $controllerName . '"');
        }




    }

    public static function redirect($location)
    {
        if (!headers_sent()) {
            header('Location: ' . PROOT . $location);
            exit();

        } else {
            echo '<script type="text/javascript"> window.location.href="' . PROOT . $location . ';"</script>';
            echo '<noscript> <meta http-equiv="refresh" content="0";url="' . $location . '"/> </noscript>';
            exit;
        }
    }





}
