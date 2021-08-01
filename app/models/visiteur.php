<?php 

class Visiteur

{
    private $database;
    // TO WORK WITH THE DATABASE 
    public function __construct()
    {
        $this->db = new Database;
    }

    // GET SEVEN PHOTOS
    public function getPhotos() {
        $this->db->query("SELECT * FROM images LIMIT 7");

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // GET TOO VIDEOS 
    public function getVideos() {
        $this->db->query("SELECT * FROM videos LIMIT 2");

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // GET FOLDERS
    public function getFolders() {
        $this->db->query("SELECT * FROM folders");

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // GET ALL PHOTOS
    public function allPhotos($data) {
        $this->db->query("SELECT * FROM images WHERE id_folder = :id");
        $this->db->bind(':id', $data['id']);

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // GET ALL PHOTOS
    public function allVideos($data) {
        $this->db->query("SELECT * FROM videos WHERE id_folder = :id");
        $this->db->bind(':id', $data['id']);

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // SEARCH FOR FOLDERS
    public function searchFolders($data) {
        $this->db->query("SELECT * FROM folders WHERE name = :name");
        $this->db->bind(':name', $data['name']);

        $result = $this->db->resultSet();

        if ($result) {
            return $result;
        }else {
            return false;
            die();
        }
    }

}