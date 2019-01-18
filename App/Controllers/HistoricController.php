<?php

class HistoricController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);

        //these are editable
         $this->view->setSiteTitle('Historic - Haarlem Festival');
         $this->view->setBgImage('HistoricBackground.png');
    }

    public function indexAction(){
        $this->view->renderView('Historic/HistoricView');
    }

    public function aboutAction() {
        self::indexAction();
    }

    public function locationsAction() {
        $this->view->renderView('Historic/HisLocationsView');
    }

    public function scheduleAction() {

        $this->view->languages = $this->HistoricModel->getLanguages();
        $this->view->historicTickets = $this->HistoricModel->getHistoricTickets();

        include ROOT . DS . 'app' . DS . 'lib' . DS . 'TableGenerator' . DS . 'Table.php';
        $this->view->table = new Table();

        $this->view->renderView('Historic/HisScheduleView');
    }
}