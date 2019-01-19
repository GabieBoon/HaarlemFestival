<?php

class ScheduleController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);
        $this->view->setBgImage('schedulebg.jpg');
    }

    public function indexAction(){

        $this->showPage();
    }

    public function showPage(){

        //roep models van de events aan
        $danceModel = new DanceModel();
        $foodModel = new FoodModel();
        $historicModel = new HistoricModel();
        $jazzModel = new JazzModel();

        //haal data uit de database op een zet die op een plek waar scheduleview er bij kan
        $this->view->danceLocations = $this->ScheduleModel->getLocations("Dance");
        $this->view->jazzLocations = $this->ScheduleModel->getLocations("Jazz");
        $this->view->restaurants = $this->ScheduleModel->getLocations("Food");
        $this->view->languages = $historicModel->getLanguages();

        $this->view->danceTickets = $danceModel->getDanceTickets();
        $this->view->foodTickets = $foodModel->getFoodTickets();
        $this->view->historicTickets = $historicModel->getHistoricTickets();
        $this->view->jazzTickets = $jazzModel->getJazzTickets();

        //laad de tablegenerator in
        include ROOT . DS . 'app' . DS . 'lib' . DS . 'TableGenerator' . DS . 'Table.php';
        $this->view->table = new Table();

        $this->view->renderView("Schedule/ScheduleView");
    }

}