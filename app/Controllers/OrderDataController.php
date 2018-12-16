<?php

class OrderDataController extends ControllerBase {

    public function __construct($class) {
        parent::__construct($class);
    }

    public function indexAction() {
        $this->view->showPage();
    }

}