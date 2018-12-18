<?php

class DB //jasper
{
    private static $_instance = null;
    private $_pdo,
        $_query,
        $_error = false,
        $_result,
        $_count = 0,
        $_lastInsertedID = null;

    private function __construct()
    {
        try {
            $this->_pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new DB();
        }
        return self::$_instance;

        /* usage of getInstance()
         * 
         * $db = DB::getInstance();
         * 
         */
    }

    public function query(string $sql, array $params = [])
    {
        $this->_error = false;
        $this->_query = $this->_pdo->prepare($sql);

        if ($this->_query) {
            for ($i = 0; $i < count($params); $i++) {
                $param = $params[$i];
                $this->_query->bindValue(($i + 1), $param);
            }

            if ($this->_query->execute()) {
                $this->_result = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
                $this->_lastInsertedID = $this->_pdo->lastInsertId();
            } else {
                $this->_error = true;
            }
        }
        return $this;

        /* usage of query()
         *
         * $db = DB::getInstance();
         * 
         * $sql = "SELECT * FROM Contacts WHERE firstName = 'Jasper'";
         * $contacts = $db->query($sql);
         * 
         * formatted_var_dump($contacts); //check
         * 
         */
         
         //$db = DB::getInstance();
         //$this->_db->query("DELETE FROM User_Sessions WHERE userId = ? AND user_agent = ?", [$this->id, $userAgent]);
    }

    public function insert($table, array $fields = [])
    {
        $fieldString = '';
        $valueString = '';
        $values = [];

        foreach ($fields as $field => $value) {
            $fieldString .= '`' . $field . '`,';
            $valueString .= '?,';
            $values[] = $value;
        }
        $fieldString = rtrim($fieldString, ',');
        $valueString = rtrim($valueString, ',');
        $sql = "INSERT INTO {$table} ({$fieldString}) VALUES ({$valueString})";
        if (!$this->query($sql, $values)->getError()) {
            return true;
        }
        return false;

        /* usage of insert()
         * 
         * $db = DB::getInstance();
         * $targetDB = 'Contacts';
         * $fields = [              //!these are only the mandatory fields!
         *    'firstName' => '',
         *    'surName' => '',
         *    'dateOfBirth' => '',  //JJJJ-MM-DD
         *    'gender' => ,         //male = 1, female = 2, undetermined = 3
         *    'phoneNr1' => '',
         *    'email' => '',
         *    'street' => '',
         *    'houseNr' => '',
         *    'postcode' => '',
         *    'city' => '',
         *    'country' => ''
         * ];
         * 
         * $contacts = $db->insert($targetDB, $fields);
         * 
         * formatted_var_dump($contacts); //check
         * 
         */
    }

    public function updateByID(int $id, $table, array $fields = [])
    {
        $fieldString = '';
        $values = [];

        foreach ($fields as $field => $value) {
            $fieldString .= ' ' . $field . ' = ?,';
            $values[] = $value;
        }
        $fieldString = trim($fieldString);
        $fieldString = rtrim($fieldString, ',');
        $sql = "UPDATE {$table} SET {$fieldString} WHERE id = {$id}";
        if (!$this->query($sql, $values)->getError()) {
            return true;
        }
        return false;

        /* usage of updateByID()
         * 
         * $db = DB::getInstance();
         * $targetDB = 'Contacts';
         * $ID = 1
         * $fields = [              //!these are only the mandatory fields!
         *    'firstName' => '',
         *    'surName' => '',
         *    'dateOfBirth' => '',  //JJJJ-MM-DD
         *    'gender' => ,         //male = 1, female = 2, undetermined = 3
         *    'phoneNr1' => '',
         *    'email' => '',
         *    'street' => '',
         *    'houseNr' => '',
         *    'postcode' => '',
         *    'city' => '',
         *    'country' => ''
         * ];
         * $contacts = $db->updateByID($ID, $targetDB, $fields);
         * 
         * formatted_var_dump($contacts); //check
         * 
         */
    }

    public function deleteByID(int $id, $table)
    {
        $sql = "DELETE FROM {$table} WHERE id = {$id}";
        if (!$this->query($sql)->getError()) {
            return true;
        }
        return false;

        /* usage of deleteByID()
         * 
         * $db = DB::getInstance();
         * $targetDB = 'Contacts';
         * $ID = 1;
         * 
         * $contacts = $db->deleteByID($id, $targetDB);
         * 
         * formatted_var_dump($contacts); //check
         * 
         */
    }

    protected function _read($table, array $params = [])
    {
        $conditionString = '';
        $bind = [];
        $order = '';
        $limit = '';

    //conditions
        if (isset($params['conditions'])) {
            if (is_array($params['conditions'])) {
                for ($i = 0; $i < count($params['conditions']); $i++) {
                    $conditionString .= ' ' . $params['conditions'][i] . ' AND';
                }
                $conditionString = rtrim(trim($conditionString), ' AND');
            } else {
                $conditionString = $params['conditions'];
            }
            if ($conditionString != '') {
                $conditionString = ' WHERE ' . $conditionString;
            }

        }
    //bind
        if (array_key_exists('bind', $params)) {
            $bind = $params['bind'];
        }
    //order
        if (array_key_exists('order', $params)) {
            $order = ' ORDER BY ' . $params['order'];
        }
    //limit
        if (array_key_exists('limit', $params)) {
            $limit = ' LIMIT ' . $params['limit'];
        }

        $sql = "SELECT * FROM {$table}{$conditionString}{$order}{$limit}";
        if ($this->query($sql, $bind)) {

            if (!$this->getCount()) {
                return false;
            }
            return true;
        }
        return false;
    }

    public function find($table, array $params = [])
    {
        if ($this->_read($table, $params)) {
            return $this->getResult();
        }
        return false;

        /* usage of find()
         *
         * $db = DB::getInstance();
         * $contacts = $db->findFirstResult('Contacts', [
         *      'conditions' => "surName = ?",
         *      'bind' => ['Stedema'],
         *      'order' => "surName, firstName",
         *      // 'limit' => 3
         * ]);
         * 
         * formatted_var_dump($contacts); //check
         * 
         */
    }

    public function findFirstResult($table, array $params = [])
    {
        if ($this->_read($table, $params)) {
            return $this->getFirstResult();
        }
        return false;

        /* usage
         *
         * $db = DB::getInstance();
         * $contacts = $db->findFirstResult('Contacts', [
         *      'conditions' => "surName = ?",
         *      'bind' => ['Stedema'],
         *      'order' => "surName, firstName"
         * ]);
         * 
         * formatted_var_dump($contacts); //check
         * 
         */
    }

    public function fetchColumns($table)
    {
        return $this->query("SHOW COLUMNS FROM {$table}")->getResult();

        /* usage of fetchColumns()
         * 
         * $db = DB::getInstance();
         * $targetDB = 'Contacts';
         * $columns = $db->fetchColumns($targetDB);
         * 
         * formatted_var_dump($columns); //check
         * 
         */
    }


    //getters
    public function getError()
    {
        return $this->_error;
    }

    public function getResult()
    {
        return $this->_result;
    }

    public function getFirstResult()
    {
        if ($this->_count > 0) {
            return $this->_result[0];
        }
        return [];
    }

    public function getCount()
    {
        return $this->_count;
    }

    public function getLastID()
    {
        return $this->_lastInsertedID;
    }
}

?>