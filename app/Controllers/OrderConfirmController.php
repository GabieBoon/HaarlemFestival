<?php

class OrderConfirmController extends ControllerBase {

    public function __construct($className, $action) {
        parent::__construct($className, $action);
    }

    public function indexAction() {
        $this->view->showPage();
    }

}