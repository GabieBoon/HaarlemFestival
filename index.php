<?php

define('DS' , DIRECTORY_SEPARATOR);
define('ROOT' , dirname(__FILE__));

//laad tools en extra's
require_once (ROOT . DS . 'config' . DS . 'config.php' );
require_once (ROOT . DS . 'customlibrary' . DS . 'functions.php' );

//autoload alle core klassen
spl_autoload_register(function ($className) {
    require_once ROOT . DS . 'core' . DS . $className . '.php';
});


session_start(); //logischer om te verplaatsen?

if (isset($_SERVER['PATH_INFO'])) { //als er extra na de sitenaam sla dit op in variabele URL
    $url = explode('/', ltrim($_SERVER['PATH_INFO'], '/'));
}
else{
    $url = [];
}


if (!coreSession::sessionExists(CURRENT_USER_SESSION_NAME) && coreCookie::exists(REMEMBER_ME_COOKIE_NAME)) {
    usersModel::loginUserFromCookie();
}

Router::route($url);

