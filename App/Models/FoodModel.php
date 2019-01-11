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
}