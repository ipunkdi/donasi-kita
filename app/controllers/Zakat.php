<?php

session_start(); // Memulai session

    class Zakat extends Controller {

        public function index()
        {
            $data['judul']= 'Zakat';
            $data['zkt'] = $this->model('Zakat_model')->getAllZakat();

            $this->view('templates/header', $data);
            $this->view('zakat/index', $data);
            $this->view('templates/footer');
        }

        public function detail($id)
        {
            $data['judul'] = 'Detail Zakat';
            $data['zkt'] = $this->model('Zakat_model')->getZakatById($id);

            $this->view('templates/header', $data);
            $this->view('zakat/detail', $data);
            $this->view('templates/footer');
        }

        public function transaksi()
        {
            $data['judul'] = 'Transaksi Zakat';

            if (!empty($_POST)) {
                $this->model('Transaksi_model')->transaksi($_POST);
                header('Location: ' . BASEURL . '/zakat');
                exit;
            }
            
            $this->view('templates/header', $data);
            $this->view('zakat/transaksi', $data);
            $this->view('templates/footer');
        }
    }
