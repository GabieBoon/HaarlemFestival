<?php

class HomeView extends ViewBase{

    public function __construct($class)
    {
        parent::__construct($class);
    }

    public function helloWorld(){
        echo "Hello World";
    }
    public function dataUitTestDB($data){
        foreach ($data as $row){
            echo $row . '<br>';
        }
    }

    public function showPage(){
        $this->render();
    }
}