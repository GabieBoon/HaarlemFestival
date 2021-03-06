
<?php

//turn debug mode on or off
define ('DEBUG', true);

## DB settings##
    //set database host
define('DB_HOST', 'XXX');

    //set database name
define('DB_NAME', 'XXX');

    //set database user
define('DB_USER', 'XXX');

    //set database password
define('DB_PASSWORD', 'XXX');
##end DB settings##


//set default controller
define('DEFAULT_CONTROLLER', 'Home'); // default controller if there isn't one defined in the url

//set default
define('DEFAULT_NAME', 'Event');

//set site title
define('SITE_TITLE', 'Haarlem Festival');

//set directory seperator 
define('DS', DIRECTORY_SEPARATOR);

//set absolute root
define('ROOT', dirname(__DIR__) . DS); //dirname of the config.php file dir AKA ../__DIR__

//set site project root
define('PROOT', '/haarlem-festival/');  //note the '/' behind the path 







//set developer details
define('DEVELOPER_NAME', 'InHolland Informatica Inf2s Group 3 (1819)');

define('CURRENT_USER_SESSION_NAME', '7fd78a90f67ds0af789d0as78f9d0sa6'); //session name for logged in user

define('REMEMBER_ME_COOKIE_NAME', 'f87d8s9ayfu9d7as8f9d07as8f6978f7'); // cookie name for logged in user remember me

define('REMEMBER_ME_COOKIE_EXPIRY', 2592000); // time for remember me cookie to live (30 days) 
