<?php

class CmsModel extends ModelBase
{

    //public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
    }

    public static function checkEvent(string $event)
    {
        $ucf_event = ucfirst($event);
        if ($ucf_event === 'Dance') {
            //Router::redirect('cms/edit/event/dance');
            return $event;
        } elseif ($ucf_event === 'Jazz') {
            return $event;
        } elseif ($ucf_event === 'Food') {
            return $event;
        } elseif ($ucf_event === 'Historic') {
            return $event;
        } else {
            return 'Event';
        }
    }

    public static function getEventColor(string $color = '')
    {
        $color = ucfirst($color);
        if ($color === 'Dance') {
            return "#3083D0";
        } elseif ($color === 'Jazz') {
            return "#440E62";
        } elseif ($color === 'Food') {
            return "#F0841B";
        } elseif ($color === 'Historic') {
            return "#DB1F1F";
        } elseif ($color === 'Schedule') {
            return "#DCC500";
        } elseif ($color === 'Cart') {
            return "#849A7D";
        } elseif ($color === 'Default') {
            return "#6AF9C4";
        } else {
            return "";
        }
    }

    

}