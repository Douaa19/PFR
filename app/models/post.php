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

    // Get photos
    public function getPhotos() {
        $this->db->query("SELECT * FROM images");
        $result = $this->db->resultSet();

        return $result;
    }

    // Delete photo
    public function deletePhoto($data) {
        $this->db->query("DELETE FROM `images` WHERE id = :id");
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
           return false;
        }
    }

    // Select OneRrow From Table Images Using ID
    public function selectOne($data) {
        $this->db->query("SELECT * FROM images WHERE id = :id");
        $this->db->bind(':id', $data['id']);

        $result = $this->db->single();
        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // Traing To Update Photo
    public function updatePhoto($data) {

        $this->db->query("UPDATE `images` SET `titre` = :title, `image` = :image, `description` = :description `tag` = :tag ");
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':tag', $data['tag']);
    }

    // Add videos to database
    public function addVideo() {
        echo 'addVideo function';
    }

    // Select All Data From Table Folders
    public function getFolders() {
        $this->db->query("SELECT * FROM folders");

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    // Add Folder 
    public function addFolder() {
        echo 'this is addFolder method';
    }

    // Delete Folder From Folders Table
    public function deleteFolder($id) {
        echo ' this is deleteFolder method';
    }

    // Folder In Images Table
    public function selectFolder(){
        $this->db->query("SELECT * FROM folders INNER JOIN images ON folders.id_folder = images.id_folder");

        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        }else {
            return false;
        }
    }

    

}