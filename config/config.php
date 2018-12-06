
<?php

//turn debug mode on or off
define ('DEBUG', true);

## DB settings##
    //set database host
define('DB_HOST', 'school.jasperstedema.nl');

    //set database name
define('DB_NAME', 'jaspewo251_festival');

    //set database user
define('DB_USER', 'jaspewo251_festival');

    //set database password
define('DB_PASSWORD', 'YHQAzcGaVm');
##end DB settings##

//set default controller
define('DEFAULT_CONTROLLER', 'home'); // default controller if there isn't one defined in the url

//set default layout
define('DEFAULT_LAYOUT', 'default'); // if no layout is set in the controller use this layout.

//set site title
define('SITE_TITLE', 'Haarlem Festival');

//set site project root
define('PROOT', '/php-eindopdracht/');

//set developer details
define('DEVELOPER_NAME', 'InHolland Informatica Inf2s Group 3 (1819)');

define('CURRENT_USER_SESSION_NAME', '7fd78a90f67ds0af789d0as78f9d0sa6'); //session name for logged in user

define('REMEMBER_ME_COOKIE_NAME', 'f87d8s9ayfu9d7as8f9d07as8f6978f7'); // cookie name for logged in user remember me

define('REMEMBER_COOKIE_EXPIRY', 2592000); // time for remember me cookie to live (30 days) 