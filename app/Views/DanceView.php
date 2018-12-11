<?php

class DanceView extends ViewBase{

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function helloWorld(){
        echo "Hello World";
    }

    public function showPage(){

        //var_dump($_SESSION) ;

        $this->render();
    }
}