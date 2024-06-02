<?php 

class Sosial_model {
    
    private $table = 'jenis_sosial';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSosial()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSosialById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}