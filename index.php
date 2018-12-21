<?php

define('DS' , DIRECTORY_SEPARATOR);
define('ROOT' , dirname(__FILE__));

//laad tools en extra's
require_once(ROOT . DS . 'config' . DS . 'config.php' );
require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');

//router werd hier niet aangeroepen
require_once(ROOT . DS . 'core' . DS . 'Router.php');


//autoload alle core klassen

spl_autoload_register(function ($fullClassName)
{
    //home Controller
    $classNameArray = camelCaseExplode($fullClassName, false, 'AB Cd');

    $mvcName = array_splice($classNameArray, -1, 1)[0];
    $className = implode($classNameArray);

    $mvcFolderName = strtolower($mvcName) . 's';

    $pathToCore = ROOT . DS . 'core' . DS . $fullClassName . '.php';

    $pathToClass = ROOT . DS . 'app' . DS . $mvcFolderName . DS . $fullClassName . '.php';

    if (file_exists($pathToCore)) {
        require_once($pathToCore);
    }
        elseif (file_exists($pathToClass)) {
        require_once($pathToClass);
        //echo ($pathToClass . '<br>');

    } 
});

//session start
session_start(); 

if (isset($_SERVER['PATH_INFO'])) { //als er extra na de sitenaam sla dit op in variabele URL
    $url = explode('/', ltrim($_SERVER['PATH_INFO'], '/'));
}
else{
    $url = [];
}


if (!Session::sessionExists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
    UserModel::loginUserFromCookie();
}

Router::route($url);

