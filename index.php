<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require config file
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'config.php');

//laad tools en extra's
require_once(ROOT . 'App' . DS . 'Lib' . DS . 'helpers' . DS . 'functions.php');

//router werd hier niet aangeroepen
require_once(ROOT . 'Core' . DS . 'Router.php');


//autoload alle core klassen

spl_autoload_register(function ($fullClassName)
{
    //home Controller
    $classNameArray = camelCaseExplode($fullClassName, false, 'AB Cd');

    $mvcName = array_splice($classNameArray, -1, 1)[0];
    $className = implode($classNameArray);

    $mvcFolderName = strtolower($mvcName) . 's';
    $mvcFolderName = ucfirst($mvcFolderName);

    $pathToCore = ROOT . 'Core' . DS . $fullClassName . '.php';

    $pathToClass = ROOT . 'App' . DS . $mvcFolderName . DS . $fullClassName . '.php';

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


$url = Router::getUrlAsArray();

// if (isset($_SERVER['PATH_INFO'])) { //als er extra na de sitenaam sla dit op in variabele URL
//     $url = explode('/', ltrim($_SERVER['PATH_INFO'], '/'));
// }
// else{
//     $url = [];
// }


if (!Session::sessionExists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
    UserModel::loginUserFromCookie();
}

Router::route($url);

