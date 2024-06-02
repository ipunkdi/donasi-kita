<?php

class Transaksi_model {

    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function transaksi($data)
    {
        $jumlah_donasi = $data['amount'];
        $id_donatur = $data['id_donatur'];

        $query = "INSERT INTO `transaksi` VALUES (null, $id_donatur, $jumlah_donasi)";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
}