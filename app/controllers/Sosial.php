<?php

session_start(); // Memulai session

    Class Sosial extends Controller {

        public function index()
        {
            $data['judul'] = 'Sosial';
            $data['sos'] = $this->model('Sosial_model')->getAllSosial();

            $this->view('templates/header', $data);
            $this->view('sosial/index', $data);
            $this->view('templates/footer');
        }

        public function detail($id)
        {
            $data['judul'] = 'Detail Sosial';
            $data['sos'] = $this->model('Sosial_model')->getSosialById($id);

            $this->view('templates/header', $data);
            $this->view('sosial/detail', $data);
            $this->view('templates/footer');
        }

        public function transaksi()
        {
            $data['judul'] = 'Transaksi Sosial';

            if (!empty($_POST)) {
                $this->model('Transaksi_model')->transaksi($_POST);
                header('Location: ' . BASEURL . '/sosial');
                exit;
            }

            $this->view('templates/header', $data);
            $this->view('sosial/transaksi', $data);
            $this->view('templates/footer');
        }
    }
