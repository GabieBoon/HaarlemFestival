<?php

class OrderConfirmView extends ViewBase {

    public function __construct($class, $siteTitle = SITE_TITLE) {
        parent::__construct($class, $siteTitle);

        $_SESSION['customerData'] = $_POST;
    }

    public function showPage() {
        $this->render();
    }
}