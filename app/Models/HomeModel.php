<?php

class HomeModel extends ModelBase{
    public function __construct()
    {
        parent::__construct();
    }
    public function dbTest(){
        $sql = "SELECT * FROM test ";
        $result = $this->conn->query($sql);

        $data= [];

        foreach ($result as $row){
            //echo $row['id'] . " ";
            //echo $row['testcol'] . " ";

            $data[] = $row['id'] . " " . $row['testcol'] . " ";
        }

        return $data;
    }
}