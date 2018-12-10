<?php

class ViewBase {

    protected $head, $body, $layout, $title, $class;

    public function __construct($class, $siteTitle = SITE_TITLE)
    {
        $this->class = $class;
        $this->title = $siteTitle;
    }

    public function render(){

        //head
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Head' .'.php';

        //header
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Header' .'.php';

        //content
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . $this->class . 'Layout' . '.php';

        //footer
        include ROOT . DS . 'app' . DS . 'Layouts' . DS . 'Footer' .'.php';
    }

//    public function getLayoutName(){
//        return $this->class . 'Layout';
//    }


}