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
        $this->db->query("SELECT * FROM images");
        $result = $this->db->resultSet();

        return $result;
    }

}