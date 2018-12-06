<?php

Class Router{
    public static function route($url){

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
}
