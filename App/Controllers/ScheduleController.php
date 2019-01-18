<?php

class ScheduleController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
    }

    public function indexAction(){

        $this->showPage();
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

    public function showPage(){

        $danceModel = new DanceModel();
        $foodModel = new FoodModel();
        $historicModel = new HistoricModel();
        $jazzModel = new JazzModel();

        $this->view->danceLocations = $this->ScheduleModel->getLocations("Dance");
        $this->view->jazzLocations = $this->ScheduleModel->getLocations("Jazz");
        $this->view->restaurants = $this->ScheduleModel->getLocations("Food");
        $this->view->languages = $historicModel->getLanguages();

        $this->view->danceTickets = $danceModel->getDanceTickets();
        $this->view->foodTickets = $foodModel->getFoodTickets();
        $this->view->historicTickets = $historicModel->getHistoricTickets();
        $this->view->jazzTickets = $jazzModel->getJazzTickets();

        include ROOT . DS . 'app' . DS . 'lib' . DS . 'TableGenerator' . DS . 'Table.php';
        $this->view->table = new Table();

        $this->view->renderView("Schedule/ScheduleViewV2");
    }

}