<?php 

class Visiteur

{
    private $database;
    public function __construct()
    {
        $this->db = new Database;
    }

    // Get photos
    public function getPhotos() {
        $this->db->query("SELECT * FROM images LIMIT 7");

        $result = $this->db->resultSet();

        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

}