<?php

class ControllerBase extends ApplicationBase
{

    protected $_controller, $_action;//, $_model;
    public $view;

    public function __construct($className, $action, bool $oldView = false, string $diffModel = null)
    {
        parent::__construct($className, $action);

        $this->_controller = $className . 'Controller';
        $this->_action = $action; //you can run without this, only troubleshooting will be a lot harder when using debugger

        if ($oldView) {
            $view = $className . 'View';
            $this->view = new $view($className);
        } else {
            $this->view = new ViewBase($className);
        }

        if (isset($diffModel)) {
            $diffModel = ucwords(strtolower($diffModel));
            $model = $diffModel . 'Model';
        } else {
            $model = $className . 'Model';
        }
        if (class_exists($model)) {
            //$this->_model = new $model();
            $this->{$model} = new $model();
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