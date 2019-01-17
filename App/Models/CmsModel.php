<?php

class CmsModel extends ModelBase
{

    //public $artists, $locations;

    public function __construct()
    {
        parent::__construct();
    }

    public static function CheckEvent(string $event)
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

}