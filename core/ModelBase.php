<?php

class ModelBase {
//david 
    protected $conn;

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

    public function getLocations($event){
        $sql = "select * from Venue where event like '$event'";

        return $this->executeQuery($sql);

    }

    public function getDanceArtists()
    {
        $sql = "select * from DanceArtist join Artist on artistId = Artist.Id";

        return $this->executeQuery($sql);
    }



// jasper

    protected $_db, $_table, $_modelName, $_softDelete = false, $_columnNames = [];
    public $id;

//wordt gebruikt als davids construct verwijderd is.
    public function __construct_tempdisabled($table)
    {
        $this->_db = DB::getInstance();
        $this->_table = $table;
        $this->_setTableColumns();
        $this->_getModelName();
    }
    
    protected function _setTableColumns()
    {
        $columns = $this->fetchColumns();
        for ($i = 0; $i < count($columns); $i++) {
            $columnName = $columns[$i]->Field;
            $this->_columnNames[] = $columns[$i]->Field;
            $this->{$columnName} = null;
        }
    }

    protected function _getModelName()
    {
        $modelName = (strtolower($this->_table) . "Model");
        if (!class_exists($modelName)) {
            $modelName = lcfirst(str_replace(' ', '', ucwords(str_replace('_', '', $this->_table)))) . "Model";
        }
        $this->_modelName = $modelName;
    }

    public function fetchColumns()
    {
        return $this->_db->fetchColumns($this->_table);
    }

    public function find(array $params = [])
    {
        $results = [];
        $resultsQuery = $this->_db->find($this->_table, $params);

        for ($i = 0; $i < count($resultsQuery); $i++) {
            $modelName = (strtolower($this->_table) . "Model");
            $obj = new $this->_modelName($modelName);
            $obj->getDataFromObj($resultsQuery[$i]);
            $results[] = $obj;
        }
        return $results;
    }

    public function findFirstResult(array $params = [])
    {
        $modelName = (strtolower($this->_table) . "Model");
        $result = new $this->_modelName($modelName);
        $resultsQuery = $this->_db->findFirstResult($this->_table, $params);
        $result->getDataFromObj($resultsQuery);
        return $result;

    }

    public function findByID(int $id)
    {
        return $this->findFirstResult(['conditions' => "id", 'bind' => [$id]]);
    }

    public function save()
    {
        $fields = [];
        for ($i = 0; $i < count($this->_columnNames); $i++) {
            $currColumn = $this->_columnNames[$i];
            $fields[$currColumn] = $this->$currColumn;
        }
        //determine whether to update or insert

        if (property_exists($this, 'id') && $this->id != '') {
            return $this->updateByID($this->id, $fields);
        } else {
            return $this->insert($fields);
        }

    }

    public function insert($fields)
    {
        if (isset($fields)) {
            return $this->_db->insert($this->_table, $fields);
        }
        return false;
    }

    public function updateByID(int $id = null, $fields)
    {
        if (isset($fields) || $id != null) {
            return $this->_db->updateByID($id, $this->_table, $fields);
        }
        return false;

    }
    public function deleteByID(int $id = null)
    {
        //make sure $id is not NULL
        if ($id == null) {
            if ($this->id == null) {
                return false;
            }
            $id = $this->id;
        }
        if ($this->_softDelete) {
            return $this->updateByID($id, ['deleted' => 1]);
        }
        return $this->_db->deleteByID($id, $this->_table);
    }

    public function query(string $sql, array $bind = [])
    {
        return $this->_db->query($sql, $bind);
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