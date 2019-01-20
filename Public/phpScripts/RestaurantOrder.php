<?php


$people = $_REQUEST["people"];
$children = $_REQUEST["children"];
$day = $_REQUEST["day"];
$session = $_REQUEST["session"];

include 'C:\xampp\htdocs\haarlem-festival\Config\config.php';

include ROOT . 'Core' . DS . 'Router' . '.php';

if ( $people == "" && $children == "" ){
    //echo $people . "/" . $session;
    echo "error vul mensen in";
}
elseif ( $day == ""){
    echo "select a day";
}
elseif ( $session == ""){
    echo "select a session";
}
else{
    $number = $people + $children;
    Router::redirect("Food/restaurantOrder/" . $number . "/" . $day . "/" . $session);
}







