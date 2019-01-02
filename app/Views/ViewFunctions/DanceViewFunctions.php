<?php

class DanceViewFunctions {

    public static function showLocations($locations){
        foreach ($locations as $location){
            $title = $location->name;
            include ROOT . 'app' . DS . 'Views' . DS . 'Templates' . DS . 'DanceBlok' .'.php';
        }
    }

    public static function showArtists($artists){
        foreach ($artists as $artist){

            $title = rtrim($artist->firstName);

            if ($artist->preposition != NULL){
                $title .= " " . trim($artist->preposition);
            }

            if ($artist->lastName != NULL){
                $title .= " " . trim($artist->lastName);
            }

            include ROOT . 'app' . DS . 'Views' . DS . 'Templates' . DS . 'DanceBlok' .'.php';
        }
    }

    public static function showAllAccessTickets($tickets){

    }

    public static function getPicture($pictureName)
    { // desperately in need of some rework


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

