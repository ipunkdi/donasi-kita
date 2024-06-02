<?php

session_start(); // Memulai session

class Donasi extends Controller {

    public function index()
    {
        $data['judul'] = 'Donasi';
        $data['dns'] = $this->model('Donasi_model')->getAllDonasi();

        $this->view('templates/header', $data);
        $this->view('donasi/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Donasi';
        $data['dns'] = $this->model('Donasi_model')->getDonasiById($id);

        $this->view('templates/header', $data);
        $this->view('donasi/detail', $data);
        $this->view('templates/footer');
    }

    public function transaksi()
    {
        $data['judul'] = 'Transaksi Donasi';

        if (!empty($_POST)) {
            $this->model('Transaksi_model')->transaksi($_POST);
            header('Location: ' . BASEURL . '/donasi');
            exit;
        }

        $this->view('templates/header', $data);
        $this->view('donasi/transaksi', $data);
        $this->view('templates/footer');
    }
}