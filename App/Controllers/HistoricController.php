<?php

class HistoricController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);

        //these are editable
        // $this->view->setSiteTitle('By order of the Peaky -fucking- Blinders');
         $this->view->setBgImage('Historic/HistoricBackground.png');
    }

    public function indexAction(){
        $this->view->renderView('Historic/HistoricView');
    }
}