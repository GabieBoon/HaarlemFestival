<?php

Class Router{
    //david
    public static function route___disabled($url){

        //controller
        if (isset($url[0]) && $url[0] != ''){
            $class = ucwords($url[0]);
        }
        else{
            $class = DEFAULT_CONTROLLER;
        }
        array_shift($url);

        //action
        if (isset($url[0]) && $url[0] != ''){
            $action = $url[0] . 'Action';
        }
        else{
            $action = 'defaultAction';
        }
        array_shift($url);

        //parameters
        $parameters = $url;

        //include the controller, model en view
        $controller = $class . 'Controller';

        require_once ROOT . DS . 'app' . DS . 'Controllers' . DS . $controller . '.php';

        //instantiate the controller class
        $dispatch = new $controller($class);

        //execute the method inside the called controller
        if (method_exists($controller, $action)){
            call_user_func_array([$dispatch, $action], $parameters);
        }
        else{
            echo "oh noes, that method doesn't exist";
        }
    }

//jasper

    //methods

    // naming convention moet ff worden aangepast
    public static function route($url) //disabled until approved
    {
        //set controller
        if (isset($url[0]) && ($url[0] != '')) {

            $className = ucwords($url[0]);
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
