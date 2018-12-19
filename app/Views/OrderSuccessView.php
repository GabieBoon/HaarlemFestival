<?php

class OrderSuccessView extends ViewBase {

    public function __construct($class, $siteTitle = SITE_TITLE) {
        parent::__construct($class, $siteTitle);
    }

    public function showPage() {
        formatted_print_r($_SESSION);
        $this->render();
    }
}