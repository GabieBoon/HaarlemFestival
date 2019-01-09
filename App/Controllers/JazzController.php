<?php

class JazzController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);

        //these are editable
        $this->view->setSiteTitle('Jazz - Haarlem Festival');
        $this->view->setBgImage('jazzbg.jpg');
    }

    public function indexAction(){
        $this->view->renderView('Jazz/AboutView');
    }

    public function aboutAction() {
        self::indexAction(); //zodat jazz/about ook werkt
    }

    public function artistsAction() {
        $this->view->renderView('Jazz/ArtistsView');
    }

    public function scheduleAction() {
        $this->view->renderView('Jazz/ScheduleView');
    }

    public function locationsAction() {
        $this->view->renderView('Jazz/LocationsView');
    }
}