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

}