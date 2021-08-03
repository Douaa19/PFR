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

    // Select one row from data using ID
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

    public function updatePhoto($data) {

        $this->db->query("UPDATE `images` SET `titre` = :title, `image` = :image, `description` = :description `tag` = :tag ");
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':tag', $data['tag']);
    }

<<<<<<< Updated upstream
    // Folder
=======
    // Add videos to database
    public function addVideo($data) {
        $this->db->query("SELECT * FROM folders WHERE name = :folder");
        $this->db->bind(':folder', $data['folder']);
        $result = $this->db->single();

        $id_folder = $result->id_folder;

        $this->db->query("INSERT INTO `videos`(`title`, `video`, `description`, `tag`, `id_folder`) VALUES (:title, :video, :description, :tag, :id_folder)");
        // BIND THE DATA
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':video', $data['video']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':tag', $data['tag']);
        $this->db->bind(':id_folder', $id_folder);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // SELECT ALL VIDEOS FROM DATABASE
    public function getVideos() {
        $this->db->query("SELECT * FROM videos");
        $result = $this->db->resultSet();

        if ($result) {
            return $result;
        }else {
            return 'Le tableau est vide';
        }
    }


    // SELECT TOO VIDEOS FROM DATABASE TO DISPLAY IT IN HOME PAGE


    // DELETE VIDEO FROM DATABASE
    // Delete photo
    public function deleteVideo($data) {
        $this->db->query("DELETE FROM `videos` WHERE id = :id");
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
           return false;
        }
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

    // Select One Folder For Checking
    public function oneFolder($data) {
        $this->db->query("SELECT name FROM folders WHERE name = :name");
        $this->db->bind(':name', $data['name']);
        
        $result = $this->db->single();
        if ($result) {
            return true;
        }else {
            return false;
        }
    }

    // Add Folder 
    public function addFolder($data) {
        $this->db->query("INSERT INTO `folders`(`name`, `image`) VALUES (:name, :image)");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':image', $data['image']);

        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        }
    }

    // Delete Folder From Folders Table
    public function deleteFolder($data) {
        $this->db->query("DELETE FROM `folders` WHERE id_folder = :id");
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
           return false;
        }
    }

    // Folder In Images Table
>>>>>>> Stashed changes
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