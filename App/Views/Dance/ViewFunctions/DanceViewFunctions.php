<?php

class DanceViewFunctions
{
    public static function showLocations($locations)
    {
        foreach ($locations as $location) {

            $title = $location->name;
            $soort = "Location";

            include ROOT . 'app' . DS . 'Views' . DS . 'Dance' . DS . 'Partials' . DS . 'DanceBlok' . '.php';
        }
    }

    public static function showArtists($artists) 
    {
        foreach ($artists as $artist) {

            $title = $artist->stageName;
            $soort = "Artist";

            include ROOT . 'app' . DS . 'Views' . DS . 'Dance' . DS . 'Partials' . DS . 'DanceBlok' . '.php';
        }
    }

    public static function showAllAccessTickets($tickets)
    {
        foreach ($tickets as $ticket) {

            //split datum en tijd, daarna uren,minuten en seconden
            $startDateTime = explode(' ', $ticket->startTime);
            $startDate = explode('-', $startDateTime[0]);

            $endDateTime = explode(' ', $ticket->endTime);
            $endDate = explode('-', $endDateTime[0]);


            include ROOT . 'app' . DS . 'Views' . DS . 'Dance' . DS . 'Partials' . DS . 'AllAccessTicketRow' . '.php';
        }
    } 

    //zoekt een plaatje in de map images aan de hand van de naam van het plaatje
    public static function getPicture($pictureName)
    {
        $plek = 'public' . DS . 'images' . DS . $pictureName;

        if (file_exists(ROOT . $plek . '.jpg')) {

            $pictureArray = explode(DS, $plek);
            $pictureString = implode('/', $pictureArray);

            return PROOT . $pictureString . '.jpg';

        } elseif (file_exists(ROOT . $plek . '.png')) {

            $pictureArray = explode(DS, $plek);
            $pictureString = implode('/', $pictureArray);

            return PROOT . $pictureString . '.png';
        }

    }

}

