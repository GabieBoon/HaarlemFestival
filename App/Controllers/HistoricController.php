<?php

class HistoricController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);

        //these are editable
        // $this->view->setLayout('Default');
        // $this->view->setHeader('Default');
        // $this->view->setFooter('Default');
        // $this->view->setSiteTitle('By order of the Peaky -fucking- Blinders');
        // $this->view->setBgImage('Historicbackground.jpg');
    }

    public function indexAction(){
        $this->view->renderView('HistoricView');
    }
}