<?php

class post {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Get photos from database
    public function getPhoto() {
        echo 'getPhoto function';
        // $this->db->query("SELECT * FROM photos");
        // $result = $this->database->resultSet();

        // return $result;
    }

    // Get videos from database
    public function getVideo() {
        echo 'getVideo function';
        // $this->db->query("SELECT * FROM videos");
        // $result = $this->database->resultSet();

        // return $result;
    }

    // Get folder from database
    public function getFolder() {
        echo 'getFolder function';
        // $this->db->query("SELECT * FROM folders");
        // $result = $this->database->resultSet();

        // return $result;
    }


    // public function addPhoto($data)

    // {
    //     $this->db->query("INSERT INTO `images`( `title`, `image`, `description`, `tag`) VALUES (:title, :image, :description, :tag)");
    //     $this->db->bind(':title', $data['title']);
    //     $this->db->bind(':image', $data['image']);
    //     $this->db->bind(':description', $data['description']);
    //     $this->db->bind(':tag', $data['tag']);
    //     $exucute_data=$this->db->execute();

    //     return $exucute_data;
    // }


    // Add photos to database
    public function addPhoto($data) {
        
        $this->db->query("SELECT * FROM folders WHERE name = :folder");
        $this->db->bind(':folder', $data['folder']);
        $result = $this->db->single();

        $id_folder = $result->id_folder;

        $this->db->query("INSERT INTO `images`(`title`, `image`, `description`, `tag`, `id_folder`) VALUES (:title, :image, :description, :tag, :id_folder)");
        
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':tag', $data['tag']);
        $this->db->bind(':id_folder', $id_folder);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    // Add videos to database
    public function addVideo() {
        echo 'addVideo function';
    }

    // Get photos
    public function getPhotos() {
        $this->db->query("SELECT * FROM images");
        $result = $this->db->resultSet();

        return $result;
    }

    

}