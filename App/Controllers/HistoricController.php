<?php

class HistoricController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);

        //these are editable
        // $this->view->setSiteTitle('By order of the Peaky -fucking- Blinders');
        // $this->view->setBgImage('Historicbackground.jpg');
    }

    public function indexAction(){
        $this->view->renderView('Historic/HistoricView');
    }
}