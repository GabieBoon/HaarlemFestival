    <?php

    class ContentModel extends ModelBase
    {
        //this doesnt work xD
        // protected $_id,
        //     $_event,
        //     $_section,
        //     $_content,
        //     $_language;

        public function __construct()
        {
            parent::__construct();
        }


        public function getRawContent(string $language, string $event, string $section)
        {
            $sql = "SELECT * FROM `Content` WHERE `language` = ? AND `event` = ? AND `section` = ?";
            return $this->query($sql, [$language ,$event, $section])->getResult();
        }

        public function getSectionNames(string $language, string $event)
        {
            $sql = "SELECT group_concat(DISTINCT `section`) as 'sections' FROM `Content` WHERE `language` = ? AND `event` = ?;";
            $result = (array)$this->query($sql, [$language, $event])->getFirstResult();

            return explode(',', $result['sections']);
        }

        

        public function getContent(string $language, string $event, string $section = '')
        {
            // return $this->getRawContent($event, $section); //debugging purposes
            if (($language != 'NL') && ($language != 'EN')) {
                return false;
            }
            
            $sectionArray = $this->getSectionNames($language, $event);
            $contentObject = new stdClass();

            $count_1 = count($sectionArray);
            for ($i = 0; $i < $count_1; $i++) {
                $section = $sectionArray[$i];

                $rawContentObject = $this->getRawContent($language, $event, $section);
                $contentObject->{$section} = new stdClass();

                $count_2 = count($rawContentObject);
                for ($j = 0; $j < $count_2; $j++) {
                    $rawContent = $rawContentObject[$j];

                    $variety = $rawContent->variety;
                    $content = $rawContent->content;

                    $contentObject->{$section}->{$variety} = $content;
                }
            }
            return $contentObject;
        }

        public function getDetailedContent(string $language, string $event, string $section = '')
        {
            // return $this->getRawContent($event, $section); //debugging purposes
            if (($language != 'NL') && ($language != 'EN')) {
                return false;
            }

            $sectionArray = $this->getSectionNames($language, $event);
            $contentObject = new stdClass();

            $count_1 = count($sectionArray);
            for ($i = 0; $i < $count_1; $i++) {
                $section = $sectionArray[$i];

                $rawContentObject = $this->getRawContent($language, $event, $section);
                $contentObject->{$section} = new stdClass();

                $count_2 = count($rawContentObject);
                for ($j = 0; $j < $count_2; $j++) {
                    $rawContent = $rawContentObject[$j];

                    $variety = $rawContent->variety;

                    $contentObject->{$section}->{$variety} = (object)[
                        'content' => $rawContent->content,
                        'type' => $rawContent->type,
                        'language' => $rawContent->language
                    ];
                }
            }
            return $contentObject;
        }



        public function storeContentPerSection(Type $var = null)
        {

        }


        public function getRestaurantDetails(string $restaurant)
        {
            $sql = "SELECT V.id, V.name, V.houseNr, V.street, V.postalCode, R.stars, FT.foodTypecol, FTT.price12
                FROM jaspewo251_festival.Venue AS V
                  JOIN jaspewo251_festival.Restaurant as R on V.id = R.venueId
                  JOIN jaspewo251_festival.RestaurantFoodType as RFT on R.id = RFT.restaurantId
                  JOIN jaspewo251_festival.FoodType AS FT on RFT.foodTypeId = FT.id
                  Join jaspewo251_festival.FoodTicket AS FTT on R.id = FTT.restaurantId
                WHERE V.name = ?
                GROUP BY V.id";
            return $this->query($sql, [$restaurant])->getFirstResult();
        }
    }