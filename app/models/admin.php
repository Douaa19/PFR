<?php

class admin

{
    private $database;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAdmin($data)
    {

        $this->db->query("SELECT * FROM admin WHERE email = :email AND password = :password");
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        $result = $this->db->single();
        

        if (!$result) {
            return false;
        } else {
            return $result;
        }

        
    }

    // Get result from database
    public function search($data) {
        $this->db->query("SELECT * FROM images WHERE tag = :tag");
        $this->db->bind(':tag', $data['search']);

        $result = $this->db->resultSet();

        if (!$result) {
            var_dump($result);
        }else {
            var_dump($result);
            die();
        }
    }
}
