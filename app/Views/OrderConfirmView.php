<?php

class OrderConfirmView extends ViewBase {

    public function __construct($class, $siteTitle = SITE_TITLE) {
        parent::__construct($class, $siteTitle);
    }

    public function showPage() {
        $this->render();
    }

}