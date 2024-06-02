<?php

session_start(); // Memulai session

class Login extends Controller {
    public function index()
    {
        $data['judul'] = 'Login';
        // $data['nama'] = $this->model('Login_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model('Login_model')->login($email, $password);

        if ((bool) $user) {
            $_SESSION['donatur'] = (array) $user;

            header("Location:" . BASEURL);
        } else {
            header("Location:" . BASEURL . '/login');
        }
    }

    public function logout()
    {
        unset($_SESSION['donatur']);

        // Menghancurkan session
        session_destroy();

        header("Location:" . BASEURL);
    }
}