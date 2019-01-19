<?php

$artistId = $_REQUEST["q"];

include 'C:\xampp\htdocs\haarlem-festival\Config\config.php';

include ROOT . 'Core' . DS . 'Router' . '.php';

Router::redirect("Dance/artist/" . $artistId);
