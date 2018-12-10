<?php

class ModelBase {

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

}