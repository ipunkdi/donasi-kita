<?php

class Register extends Controller {
    public function index()
    {
        $data['judul'] = 'Register';
        // $data['nama'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }

    public function register()
    {
        $nama = $_POST['nama'];
        $nohp = $_POST['nohp'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!$this->model('Register_model')->isUserExistByNohp($nohp) && !$this->model('Register_model')->isUserExistByEmail($email)) {
            $this->model('Register_model')->register($nama, $nohp, $email, $password);
            header("Location:" . BASEURL . '/login');
        } else {
            header("Location:" . BASEURL . '/register');
        }
    }
}