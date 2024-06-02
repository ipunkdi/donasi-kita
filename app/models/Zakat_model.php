<?php 

class Zakat_model {
    private $table = 'jenis_zakat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllZakat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getZakatById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}