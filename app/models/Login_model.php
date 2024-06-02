<?php

class Login_model {

    private $table = 'donatur';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($email, $password)
    {
        $this->db->query('SELECT * FROM `donatur` WHERE email=:email AND password=:password');
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        return $this->db->resultSet();
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM `donatur` WHERE email=:email');
        $this->db->bind('email', $email);
        $user = $this->db->single();

        if ((bool) $user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }
}