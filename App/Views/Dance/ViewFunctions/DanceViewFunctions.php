<?php

class DanceViewFunctions
{
    public static function showLocations($locations)
    {
        foreach ($locations as $location) {
            $title = $location->name;
            include ROOT . 'app' . DS . 'Views' . DS . 'Dance' . DS . 'Partials' . DS . 'DanceBlok' . '.php';
        }
    }
    
    //plz use for loops.. https://phpbench.com/  :)
    public static function showArtists($artists) 
    {
        foreach ($artists as $artist) {

            $title = $artist->stageName;

            include ROOT . 'app' . DS . 'Views' . DS . 'Dance' . DS . 'Partials' . DS . 'DanceBlok' . '.php';
        }
    }

    public static function showAllAccessTickets($tickets)
    {
        foreach ($tickets as $ticket) {
            include ROOT . 'app' . DS . 'Views' . DS . 'Dance' . DS . 'Partials' . DS . 'AllAccessTicketRow' . '.php';
        }
    } 

    //miss zelfs beter om deze in router te gooien, komt later wel
    public static function getPicture($pictureName)
    { // desperately in need of some rework

        // $pictureArray = explode('/', $pictureName);
        // $pictureString = implode(DS, $pictureArray);

        //plek en pad zijn hetzelfde?
        $plek = ROOT . DS . 'public' . DS . 'images' . DS . $pictureName;

        $pad = "/haarlem-festival/public/images/" . $pictureName;


        // als "plek" .jpg bestaat, return "pad". jpg en anders "pad" . png? waarom geen return "plek"
        if (file_exists($plek . '.jpg')) {
            return $pad . '.jpg';
        } elseif (file_exists($plek . '.png')) {
            return $pad . '.png';
        }

    }

}

