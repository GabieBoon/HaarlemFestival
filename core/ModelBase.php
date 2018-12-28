<?php

class ModelBase {
//david 
 /*   protected $conn;

    public function __construct()
    {
        //roep de database aan
        if (!isset($conn)){
            $this->conn = $this->dbconnect();
        }

    }

    private function dbconnect() {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    }

    protected function executeQuery($sql, $params = []){

        $results = [];

        //prepare statement
        if ($statement = $this->conn->prepare($sql)){

            $x = 1;

            //is de input een array?
            if (is_array($params)){
                if (count($params)){ //is de array niet leeg?
                    foreach ($params as $param){
                        $statement->bind_param($x,$param); //bind de parameters
                        $x++;
                    }
                }
            }
            else{ //input is een int of een string
                $statement->bind_param("s" ,$params); //bind de parameter
            }


            //voer de query uit
            if ($statement->execute()) {

                $result = $statement->get_result();

                while($obj = $result->fetch_object()){ //maak een klasse van elke regel uit het resultaat
                    $results[] = $obj; //stop de klasse in een array
                }
            }

        }

        return $results;

    }



*/

// jasper

    protected $_db, $_modelName, $_softDelete = false, $_columnNames = [];
    public $id;

    public function __construct()
    {
        $this->_db = DB::getInstance();
        $this->_getModelName();
        
    }

    public function query(string $sql, array $bind = [])
    {
        return $this->_db->query($sql, $bind);
    }



/*
    protected function _setTable(string $table)
    {
        
        $this->_setTableColumns();
    }
    */

    protected function _setTableColumns()
    {
        $columns = $this->fetchColumns();
        if ($columns == null) {
            return false;
        }
        for ($i = 0; $i < count($columns); $i++) {
            $columnName = $columns[$i]->Field;
            $this->_columnNames[] = $columns[$i]->Field;
            $this->{$columnName} = null;
        }
    }

    protected function _getModelName($table = null)// herschrijf naar nieuw naming convention
    {
        $this->_modelName = get_class($this); //. 'Model';
        // if (condition) {
        //     # code...
        // }
        // $modelName = ucwords(strtolower($table) . "Model");
        // if (get_class($this) != $modelName){//!class_exists($modelName)) {
        //     $modelName = ucwords(str_replace(' ', '', ucwords(str_replace('_', '', $table)))) . "Model";
        // }
        // formatted_print_r(get_class($this));
        // $this->_modelName = $modelName;
    }

    public function fetchColumns($table)
    {
        return $this->_db->fetchColumns($table);
    }

    // public function find($table, array $params = [])
    // {
    //     $results = [];
    //     $resultsQuery = $this->_db->find($table, $params);

    //     for ($i = 0; $i < count($resultsQuery); $i++) {
    //         $modelName = $this->_getModelName($table);
    //         $obj = new $this->_modelName($modelName);
    //         $obj->getDataFromObj($resultsQuery[$i]);
    //         $results[] = $obj;
    //     }
    //     return $results;
    // }

    // public function findFirstResult($table, array $params = [])
    // {
    //     $modelName = $this->_getModelName($table);
    //     $result = new $this->_modelName($modelName);
    //     $resultsQuery = $this->_db->findFirstResult($table, $params);
    //     $result->getDataFromObj($resultsQuery);
    //     return $result;

    // }

    // public function findByID(int $id, $table)
    // {
    //     return $this->findFirstResult($table, ['conditions' => "id", 'bind' => [$id]]);
    // }


    public function makeModel(stdClass $object = null)
    {

        $modelName = get_class($this); //$this->_getModelName($table);
        $result = new $modelName($object->userName);

        //$resultsQuery = $this->_db->findFirstResult($table, $params);
        //$result->getDataFromObj($resultsQuery);
        return $result;
    }


    public function save($table)
    {
        $fields = [];
        for ($i = 0; $i < count($this->_columnNames); $i++) {
            $currColumn = $this->_columnNames[$i];
            $fields[$currColumn] = $this->$currColumn;
        }
        //determine whether to update or insert

        if (property_exists($this, 'id') && $this->id != '') {
            return $this->updateByID($table, $this->id, $fields);
        } else {
            return $this->insert($fields);
        }

    }

    public function insert($table, $fields)
    {
        if (isset($fields)) {
            return $this->_db->insert($table, $fields);
        }
        return false;
    }

    public function updateByID(int $id = null, $table, array $fields = [])
    {
        if (isset($fields) || $id != null) {
            return $this->_db->updateByID($id, $table, $fields);
        }
        return false;

    }
    public function deleteByID($table, int $id = null)
    {
        //make sure $id is not NULL
        if ($id == null) {
            if ($this->id == null) {
                return false;
            }
            $id = $this->id;
        }
        if ($this->_softDelete) {
            return $this->updateByID($id, $table, ['deleted' => 1]);
        }
        return $this->_db->deleteByID($id, $table);
    }



    public function data()
    {
        $data = new stdClass();
        for ($i = 0; $i < count($this->_columnNames); $i++) {
            $data->column = $this->_columnNames[$i];
        }
        return $data;
    }

    public function assign($params)
    {
        if (isset($params)) {
            foreach ($params as $key => $val) {
                if (in_array($key, $this->_columnNames)) {
                    $this->$key = sanitize($val);
                }
            }
            return true;
        }
        return false;
    }


    protected function getDataFromObj($result)
    {
        if ($result) {
            foreach ($result as $key => $val) {
                $this->$key = $val;
            }

        }

    }



}