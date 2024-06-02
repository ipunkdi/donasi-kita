<?php

class Register_model
{
    private $table = 'donatur';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($nama, $nohp, $email, $password)
    {
        $this->db->query("INSERT INTO `donatur`(`nama`, `nohp`, `email`, `password`) VALUES (:nama, :nohp, :email, :password)");
        $this->db->bind('nama', $nama);
        $this->db->bind('nohp', $nohp);
        $this->db->bind('email', $email);
        $this->db->bind('password', password_hash($password, PASSWORD_DEFAULT));
        return $this->db->execute();
    }

    public function isUserExistByNohp($nohp)
    {
        $this->db->query('SELECT * FROM `donatur` WHERE nohp=:nohp');
        $this->db->bind('nohp', $nohp);
        return (bool)$this->db->single();
    }

    public function isUserExistByEmail($email)
    {
        $this->db->query('SELECT * FROM `donatur` WHERE email=:email');
        $this->db->bind('email', $email);
        return (bool)$this->db->single();
    }
}