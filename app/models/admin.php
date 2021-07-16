<?php

class admin

{
    private $database;
    public function __construct()
    {
        $this->database = new Database;
    }

    public function getAdmin($data)
    {

        $this->database->query("SELECT * FROM admin WHERE email = :email AND password = :password");
        $this->database->bind(':email', $data['email']);
        $this->database->bind(':password', $data['password']);

        $result = $this->database->single();
        

        if (!$result) {
            return false;
        } else {
            return $result;
        }

        
    }
}
