<?php 

class Donasi_model {

    private $table = 'jenis_donasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDonasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDonasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}