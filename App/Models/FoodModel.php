<?php

class FoodModel extends ModelBase{
    public function __construct()
    {
        parent::__construct();
    }

    public function getRestaurantInfo()
    {
        $sql = "SELECT R.id, V.name, V.bio, R.stars, FT.foodTypecol, R.imagePath FROM jaspewo251_festival.Venue AS V
                JOIN Restaurant as R on V.id = R.venueId
                JOIN RestaurantFoodType as RFT on R.id = RFT.restaurantId
                JOIN FoodType AS FT on RFT.foodTypeId = FT.id";
        return $this->_db->query($sql)->getResult();
    }

    public function getRestaurantDetails($restaurant){
        $sql = "SELECT R.id, R.restaurantDescription, V.name, V.houseNr, V.street, V.postalCode, R.stars, FT.foodTypecol, FTT.price12, T.price
                FROM jaspewo251_festival.Venue AS V
                    JOIN jaspewo251_festival.Restaurant as R on V.id = R.venueId
                    JOIN jaspewo251_festival.RestaurantFoodType as RFT on R.id = RFT.restaurantId
                    JOIN jaspewo251_festival.FoodType AS FT on RFT.foodTypeId = FT.id
                    Join jaspewo251_festival.FoodTicket AS FTT on R.id = FTT.restaurantId
                    JOIN jaspewo251_festival.Ticket AS T on FTT.ticketId = T.id
                WHERE R.id = ?
                GROUP BY V.id";
        return $this->query($sql, [$restaurant])->getFirstResult();
    }

    public static function CheckRestaurants(string $restaurant)
    {
        $ucf_restaurant = ucfirst($restaurant);
        if ($ucf_restaurant === 'The Golden Bull') {
            //Router::redirect('cms/edit/event/dance');
            return $restaurant;
        } elseif ($ucf_restaurant === 'Restaurant Mr. & Mrs.') {
            return $restaurant;
        } elseif ($ucf_restaurant === 'Restaurant ML') {
            return $restaurant;
        } elseif ($ucf_restaurant === 'Urban Frenchy Bistro Toujours') {
            return $restaurant;
        } elseif ($ucf_restaurant === 'Ratatouille') {
            return $restaurant;
        } elseif ($ucf_restaurant === 'Restaurant Fris') {
            return $restaurant;
        } elseif ($ucf_restaurant === 'Specktakel') {
            return $restaurant;
        } elseif ($ucf_restaurant === 'Grand Cafe Brinkman') {
            return $restaurant;
        } else {
            return 'Restaurant';
        }
    }
}