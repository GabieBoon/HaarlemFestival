<?php

class OrderDataModel extends ModelBase {

    public $firstName, $lastName, $email, $remarks;

    public function __construct() {
        parent::__construct();
    }

}