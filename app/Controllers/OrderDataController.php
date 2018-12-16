<?php

class OrderDataController extends ControllerBase {

    public function __construct($class) {
        parent::__construct($class);
    }

    public function defaultAction() {
        $this->view->showPage();
    }

}