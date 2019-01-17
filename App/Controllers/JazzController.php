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

    public function artistsAction($pageNumber) {
        $this->view->pageNumber = $pageNumber;
        $this->view->artists = array();
        $this->view->artistIds = array();

        $artistObjects = $this->JazzModel->getArtistsForPage($pageNumber);

        foreach($artistObjects as $obj) {
            array_push($this->view->artistIds, $obj->id);
            array_push($this->view->artists, $obj->stageName);
        }

//        echo '<pre>';
//        echo var_dump($this->view->artists);
//        echo '</pre>';
//        die;

        $this->view->renderView('Jazz/ArtistsView');
    }

    public function ticketsAction() {
        $this->view->renderView('Jazz/TicketsView');
    }

    public function locationsAction() {
        $this->view->renderView('Jazz/LocationsView');
    }
}