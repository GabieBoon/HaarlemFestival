<?php

class FoodViewFunctions
{

    public static function viewRestaurantInfo($restaurants)
    {
        foreach($restaurants as $restaurant){

            include ROOT . 'app' . DS . 'Views' . DS . 'Food' . DS . 'Partials' . DS . 'RestaurantBlock' . '.php';
        }
    }

}
?>