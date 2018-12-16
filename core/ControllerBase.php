<?php

 class ControllerBase extends ApplicationBase{

    //protected $model, $view;

    //zorg voor verbinding tussen de controller en de model en view klassen
     //wordt aangeroepen vanuit Controller klassen
    /*public function __construct__disabled($class)
    {
        //roep de application base aan
        parent::__construct($class);

        $model = $class . 'Model';
        $view = $class . 'View';

        require_once ROOT . DS . 'app' . DS . 'Models' . DS . $model . '.php';
        require_once ROOT . DS . 'app' . DS . 'Views' . DS . $view . '.php';


        $this->model = new $model();
        $this->view = new $view($class);
    }*/

    protected $controller, $action, $model;
    public $view;

    public function __construct($className, $action)
    {
        parent::__construct($className);

        $model = $className . 'Model';
        $view = $className . 'View';
     
        $this->controller = $className . 'Controller';
        $this->action = $action; //testing if it can run without this property
        $this->view = new $view($className);
        
        if (class_exists($model)) {
            $this->model = new $model();
        }
    }


}