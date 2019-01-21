<?php

//script wordt aangeroepen via AJAX, stuurt de gebruiker terug naar de hoofdsite zodat
// alle methodes en klassen van de rest van de site gebruikt kunnen worden

//vraag het locationId op vanuit de url
$locationId = $_REQUEST["q"];

//require config file
require_once('../../' . 'Config' . DIRECTORY_SEPARATOR . 'config.php');

include ROOT . 'Core' . DS . 'Router' . '.php';

Router::redirect("Dance/location/" . $locationId);