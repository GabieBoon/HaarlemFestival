<?php

class JazzModel extends ModelBase {

    public function __construct()
    {
        parent::__construct();
    }

    public function getArtistNames() {
        $sql = "
                SELECT stageName
                FROM Artist
                WHERE bio = 'JazzBand'
                ORDER BY stageName ASC;
                ";

        return $this->_db->query($sql)->getResult();
    }

}