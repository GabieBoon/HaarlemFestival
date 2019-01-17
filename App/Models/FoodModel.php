<?php

class FoodModel extends ModelBase{
    public function __construct()
    {
        parent::__construct();
    }

    public function getRestaurantInfo()
    {
        $sql = "SELECT V.id, V.name, V.bio, R.stars, FT.foodTypecol, R.imagePath FROM jaspewo251_festival.Venue AS V
                JOIN Restaurant as R on V.id = R.venueId
                JOIN RestaurantFoodType as RFT on R.id = RFT.restaurantId
                JOIN FoodType AS FT on RFT.foodTypeId = FT.id";
        return $this->_db->query($sql)->getResult();
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