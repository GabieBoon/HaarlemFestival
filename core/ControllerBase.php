<?php

class ControllerBase extends ApplicationBase
{

    protected $controller, $action;//, $model;
    public $view;

    public function __construct($className, $action, bool $diffView = false, string $diffModel = null)
    {
        parent::__construct($className);

        $this->controller = $className . 'Controller';
        $this->action = $action; //you can run without this, only troubleshooting will be a lot harder when using debugger

        if ($diffView) {
            $this->view = new ViewBase($className);
        } else {
            $view = $className . 'View';
            $this->view = new $view($className);
        }

        if (isset($diffModel)) {
            $model = $diffModel . 'Model';
            if (class_exists($model)) {
                $this->$model = new $model($diffModel);
            }
        } else {
            $model = $className . 'Model';
            if (class_exists($model)) {
                $this->$model = new $model();
            }
        }

    }
/*
    protected function loadModel($model)
    {
        if (class_exists($model)) {

            $modelTrim = strtolower(rtrim($model, 'Model'));

            $this->$model = new $model($modelTrim);
            //formatted_print_r($this->$model);
            //die();
        }
    }
*/
}