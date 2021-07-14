<?php

class post {

    private $database;

    public function __construct()
    {
        $this->database = new Database;
    }

    // Get photos from database
    public function getPhoto() {
        echo 'getPhoto function';
        // $this->database->query("SELECT * FROM photos");
        // $result = $this->database->resultSet();

        // return $result;
    }

    // Get videos from database
    public function getVideo() {
        echo 'getVideo function';
        // $this->database->query("SELECT * FROM videos");
        // $result = $this->database->resultSet();

        // return $result;
    }

    // Get folder from database
    public function getFolder() {
        echo 'getFolder function';
        // $this->database->query("SELECT * FROM folders");
        // $result = $this->database->resultSet();

        // return $result;
    }

    // Add photos to database
    public function addPhoto() {
        echo 'addPhoto function';
    }

    // Add videos to database
    public function addVideo() {
        echo 'addVideo function';
    }

    

}