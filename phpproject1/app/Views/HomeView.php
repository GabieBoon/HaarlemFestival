<?php

class HomeView extends ViewBase{

    public function __construct()
    {
        parent::__construct();
    }

    public function helloWorld(){
        echo "Hello World";
    }

}