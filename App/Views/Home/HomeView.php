<?php

class HomeView extends ViewBase{

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function helloWorld(){
        echo "Hello World";
    }

    public function showPage(){
        $this->render();
        //$this->renderView('Home/HomeView');
    }
}