<?php

class JazzController extends ControllerBase {

    //voer de functionaliteit van ControllerBase uit
    public function __construct($className, $action)
    {
        parent::__construct($className, $action);

        //these are editable
        // $this->view->setSiteTitle('Do you like Jazz?');
        // $this->view->setBgImage('jazzbackground.jpg');
    }

    public function indexAction(){
        $this->view->renderView('Jazz/JazzView');
    }
}