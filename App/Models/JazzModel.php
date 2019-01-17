<?php

class JazzModel extends ModelBase {

    public function __construct()
    {
        parent::__construct();
    }

    public function getArtistsForPage($pageNumber) {
        $sql = "SELECT id, stageName
                FROM Artist
                WHERE bio = 'JazzBand'
                ORDER BY stageName ASC
                LIMIT 6
                OFFSET " . intval(($pageNumber * 6) - 6) . ";"; // amount of shown artists per page is 6

        return $this->_db->query($sql)->getResult();
    }

}