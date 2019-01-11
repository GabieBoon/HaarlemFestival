<?php

class ScheduleController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
    }

    public function indexAction(){

        $this->showPageV2();
    }

//    public function showPage(){
//        $danceLocations = $this->model->getLocations("Dance");
//        $jazzLocations = $this->model->getLocations("Jazz");
//        $restaurants = $this->model->getLocations("Food");
//        $languages = $this->model->getLanguages();
//
//        $danceTickets = $this->model->getDanceTickets();
//        $foodTickets = $this->model->getFoodTickets();
//        $historicTickets = $this->model->getHistoricTickets();
//        $jazzTickets = $this->model->getJazzTickets();
//        //($languages);
//
//        $this->view->showPage($danceArtists, $danceLocations, $jazzLocations, $restaurants, $languages, $danceTickets, $foodTickets, $historicTickets, $jazzTickets);
//    }

    public function showPageV2(){
        $this->view->danceLocations = $this->utf8_encodeObjectArray($this->ScheduleModel->getLocations("Dance"));
        $this->view->jazzLocations = $this->utf8_encodeObjectArray($this->ScheduleModel->getLocations("Jazz"));
        $this->view->restaurants = $this->utf8_encodeObjectArray($this->ScheduleModel->getLocations("Food"));
        $this->view->languages = $this->utf8_encodeObjectArray($this->ScheduleModel->getLanguages());

        $this->view->danceTickets = $this->utf8_encodeObjectArray($this->ScheduleModel->getDanceTickets());
        $this->view->foodTickets = $this->utf8_encodeObjectArray($this->ScheduleModel->getFoodTickets());
        $this->view->historicTickets = $this->utf8_encodeObjectArray($this->ScheduleModel->getHistoricTickets());
        $this->view->jazzTickets = $this->utf8_encodeObjectArray($this->ScheduleModel->getJazzTickets());

        include ROOT . DS . 'app' . DS . 'lib' . DS . 'TableGenerator' . DS . 'Table.php';
        $this->view->table = new Table();

        $this->view->renderView("Schedule/ScheduleViewV2");
    }

}